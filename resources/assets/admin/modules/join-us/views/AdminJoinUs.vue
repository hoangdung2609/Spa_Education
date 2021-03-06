<template>
    <b-row>
        <b-col sm="12">
            <b-row>
                <b-col lg="3"></b-col>
                <b-col lg="6" class="text-center" style="padding-bottom: 20px">
                    <b-form-input
                        type="text" :value="valueFilter"
                        :placeholder="$t('textInputFilter')"
                        @input="handleChangeValueFilter"
                    />
                </b-col>
                <b-col lg="3">
                    <b-button-group class="pull-right">
                        <b-button variant="success" @click="clickAddNewItem">
                            <i class="icon-plus"></i>
                            {{ $t('textAddJoinUs') }}
                        </b-button>
                    </b-button-group>
                </b-col>
            </b-row>
        </b-col>
        <b-col lg="12">
            <b-card>
                <b-table
                    class="mb-0 table-outline text-center"
                    head-variant="light"
                    :hover="true" :striped="false"
                    :bordered="true" :fixed="true"
                    :items="filterItems"
                    :fields="fields"
                    :current-page="currentPage"
                    :per-page="perPage"
                >
                    <template slot="title" slot-scope="data">
                        {{ data.item.title_vi }} <br/>
                        {{ data.item.title_en }}
                    </template>
                    <template slot="action" slot-scope="data">
                        <b-button
                            type="submit" size="sm"
                            variant="primary"
                            @click="clickEditItem(data.item)"
                        >
                            <i class="icon-pencil"></i>
                            {{ $t('textEdit') }}
                        </b-button>
                        <b-button
                            type="reset" size="sm"
                            variant="danger"
                            @click="clickDeleteItem(data.item.id)"
                        >
                            <i class="icon-trash"></i>
                            {{ $t('textDelete') }}
                        </b-button>
                    </template>
                </b-table>
                <nav>
                    <b-pagination
                        :total-rows="filterItems.length"
                        :per-page="perPage"
                        v-model="currentPage"
                        prev-text="< Pre"
                        next-text="Next >"
                        hide-goto-end-buttons
                        @input="changePage"
                    />
                </nav>
            </b-card>
        </b-col>
    </b-row>
</template>

<script>
    import Helper from 'Admin/library/Helper'

    export default {
        name: 'AdminJoinUs',

        async beforeCreate() {
            Helper.changeTitleAdminPage(this.$i18n.t('textManageJoinUs'))
            await this.$store.dispatch('actionFetchJoinUs', { vue: this })
        },

        data() {
            return {
                fields: [
                    {key: 'id', sortable: true},
                    {key: 'title', label: this.$i18n.t('textName'), tdClass: 'text-left'},
                    {key: 'action', label: this.$i18n.t('textAction')},
                ],
                perPage: 10,
            }
        },

        methods: {
            clickAddNewItem() {
                return this.$router.push({ path: '/join-us/add' })
            },

            clickEditItem(data) {
                return this.$router.push({ path: `/join-us/edit/${data.id}` })
            },

            async clickDeleteItem(id) {
                return id
                    && await this.$swal({
                        title: this.$i18n.t('textConfirmDelete'),
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    })
                    && this.$store.dispatch('actionJoinUsDelete', { vue: this, id })
            },

            changePage(page) {
                this.$store.dispatch('actionJoinUsSetPage', { page })
            },

            handleChangeValueFilter(value) {
                return this.$store.dispatch('actionJoinUsSetFilter', { value: value.trim() })
            },
        },

        computed: {
            currentPage: {
                get() {
                    return this.$store.state.storeAdminJoinUs.currentPage
                },
                set(value) {}
            },

            valueFilter() {
                return this.$store.state.storeAdminJoinUs.valueFilter
            },

            filterItems() {
                let valueFilter = this.valueFilter.trim().toLowerCase();

                if (!valueFilter) {
                    return this.items
                }

                return this.items.filter(item => {
                    for (let i in item) {
                        if (String(item[i]).toLowerCase().indexOf(valueFilter) !== -1) return true
                    }

                    return false
                })
            },

            items() {
                return this.$store.state.storeAdminJoinUs.listFetch
            },
        },
    }
</script>
