<template>
    <b-card>
        <b-row>
            <b-col sm="12">
                <b-form validated>
                    <b-row>
                        <b-col sm="12">
                            <b-form-fieldset :label="$t('textType')">
                                <b-form-select
                                    :plain="true" required
                                    :options="getTypeOptions()"
                                    v-model="formData.sameData.type"
                                />
                            </b-form-fieldset>
                        </b-col>
                    </b-row>

                   <b-tabs pills card>
                       <b-tab
                               :title="language.title"
                               v-for="language in getLanguages()"
                               :key="language.key"
                       >
                           <b-row>
                               <b-col sm="12">
                                   <b-form-fieldset :label="$t('textTitle')">
                                       <b-form-input
                                           type="text" required
                                           v-model="formData[language.key].title"
                                           :placeholder="$t('textTitle')"
                                           @input="handleChangeTitle($event, language.key)"
                                       />
                                   </b-form-fieldset>
                               </b-col>
                           </b-row>
                           <b-row>
                               <b-col sm="12">
                                   <b-form-fieldset :label="$t('textSlug')">
                                        <b-form-input
                                            type="text" required
                                            v-model="formData[language.key].slug"
                                            :value="formData[language.key].slug"
                                            :placeholder="$t('textSlug')"
                                        />
                                   </b-form-fieldset>
                               </b-col>
                           </b-row>

                           <b-row>
                               <b-col sm="12">
                                   <b-form-fieldset :label="$t('textDecription')">
                                        <textarea
                                            class="form-control"
                                            :placeholder="$t('textDecription')"
                                            v-model="formData[language.key].description"
                                            rows="4"
                                        />
                                   </b-form-fieldset>
                               </b-col>
                           </b-row>

                           <b-row>
                               <b-col sm="6">
                                   <b-form-fieldset :label="$t('textSeoKeyword')">
                                        <b-form-input
                                           type="text"
                                           :placeholder="$t('textSeoKeyword')"
                                           v-model="formData[language.key].seo_keyword"
                                        />
                                   </b-form-fieldset>
                               </b-col>
                               <b-col sm="6">
                                   <b-form-fieldset :label="$t('textSeoDescription')">
                                       <b-form-input
                                               type="text"
                                               :placeholder="$t('textSeoDescription')"
                                               v-model="formData[language.key].seo_description"
                                       />
                                   </b-form-fieldset>
                               </b-col>
                           </b-row>
                       </b-tab>
                   </b-tabs>

                </b-form>
            </b-col><!--/.col-->
        </b-row>
        <div slot="header" class="w-100">
            <b-row>
                <b-col sm="4">{{ $t('textEdit') }}</b-col>
                <b-col sm="8" class="text-right">
                    <b-button type="submit" size="xs" variant="primary" @click="clickSubmitEdit">
                        <i class="fa fa-dot-circle-o"></i>
                        {{ $t('textSave') }}
                    </b-button>
                    <b-button type="reset" size="xs" variant="danger" @click="clickCancel">
                        <i class="fa fa-ban"></i>
                        {{ $t('textCancel') }}
                    </b-button>
                </b-col>
            </b-row>
        </div>
        <div slot="footer" class="w-100 text-center">
            <b-button type="submit" size="xs" variant="primary" @click="clickSubmitEdit">
                <i class="fa fa-dot-circle-o"></i>
                {{ $t('textSave') }}
            </b-button>
            <b-button type="reset" size="xs" variant="danger" @click="clickCancel">
                <i class="fa fa-ban"></i>
                {{ $t('textCancel') }}
            </b-button>
        </div>
    </b-card>
</template>

<script>
import Helper from 'Admin/library/Helper'

import { STORAGE_AUTH } from 'Admin/modules/auth/store'
import { sameForm, sameData, typeOptions } from '../store/formData'

export default {
    name: 'AdminCategoryEdit',

    async beforeCreate() {
        Helper.changeTitleAdminPage(this.$i18n.t('textManageCategory'))
        await this.$store.dispatch('actionCategoryShow', { vue: this, id: this.$route.params.id })
    },

    computed: {
        formData() {
            let data = this.$store.state.storeAdminCategory.edit.data
            let formData = { sameData: {} }

            for (let key in sameData) {
                formData.sameData[key] = data[key]
            }

            for (let language of this.getLanguages()) {
                formData[language.key] = {}
                for(let key in sameForm) {
                    formData[language.key][key] = data[`${key}_${language.key}`]
                }
            }

            return { ...formData }
        },
    },

    methods: {
        getTypeOptions() {
            return typeOptions
        },

        getLanguages() {
            return this.$store.state.storeLanguage.languages;
        },

        handleChangeTitle(value, languageKey) {
            this.formData[languageKey].has = true;
            this.formData[languageKey].slug = slug(value || '')
        },

        validateForm() {
            let validate = true;

            for (let language of this.getLanguages()) {
                validate &= !!this.formData[language.key].title
                    & !!this.formData[language.key].slug
            }

            return validate & !!this.formData.sameData.type

        },

        convertDataSubmit() {
            let params = {
                ...this.formData.sameData,
            }

            for (let language of this.getLanguages()) {
                let form = this.formData[language.key];
                for(let key in form) {
                    params[`${key}_${language.key}`] = form[key]
                }
            }

            return params;
        },

        clickSubmitEdit() {
            if (!this.validateForm()) {
                return this.$toaster.error(this.$i18n.t('textNotFillEnough'))
            }
            
            let params = this.convertDataSubmit();

            this.$store.dispatch('actionCategoryEdit', { vue: this, params, id: this.$route.params.id });
        },

        clickCancel() {
            return this.$router.push({ path: '/categories' })
        },
    }
}
</script>
