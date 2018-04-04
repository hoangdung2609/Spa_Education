@extends('user.layouts.master')

@section('user-title', 'AI Academy')
@section('seo-description', 'AI Academy')
@section('seo-keyword',  'AI Academy')

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
<!-- Banner -->
<div class="elh-page-header elh-img-bg elh-bg-9">
    <div class="elh-overlay">
        <div class="container text-center">
            <h3 class="elh-page-title">{{ $data[fieldLanguage('title')] }}</h3>
        </div>
    </div>
</div>
<!-- Banner End -->
@endsection

@section('user-content')
<!-- Main wrapper start -->
<div class="elh-main-wrap">

    <!-- Blog Sigle -->
    <div class="elh-section elh-section-padding">
        <div class="container">
            <div class="row" id="elh-course-container">
                <div class="col-md-12 col-xs-12">
                    <div class="elh-course-body">
                        <div class="elh-course-description elh-course-section">
                            <h3>{{ __('about_us.vision.description') }}</h3>
                            <div class="post-entry">
                                {{ $data[fieldLanguage('detail')] }}
                            </div>
                        </div>
                    </div>

                    <!-- Feedback -->
                    <!--
                        <div class="elh-course-student-feedback">
                            <div class="elh-section-header text-left">
                                <h3 class="elh-section-title">Feeback</h3>
                            </div>

                            <div class="elh-course-reviews">
                                <div class="elh-course-review-item">
                                    <div class="elh-course-reviewer-thumb">
                                        <img class="img-responsive" src="/images/course/course-reviewer-thumb.jpg" alt="...">
                                    </div>
                                    <div class="elh-course-review-body">
                                        <div class="elh-course-review-title">
                                            <h5>Oliver Liam</h5>
                                            <div class="elh-course-reviewer-rating">
                                                <span class="star on"></span>
                                                <span class="star on"></span>
                                                <span class="star on"></span>
                                                <span class="star on"></span>
                                                <span class="star on"></span>
                                            </div>
                                        </div>
                                        <p class="elh-course-review-time"><i class="fa fa-clock-o"></i> June 9, 2018 at 09:52 am</p>
                                        <p class="elh-course-review-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <form class="elh-review-feedback-form" action="#">
                                            <span class="elh-feedback-on-review-question">Was this review helpful?</span>
                                            <button class="submitted" type="submit" value="yes"><i class="fa fa-check"></i> Yes</button>
                                            <button type="submit" value="no"><i class="fa fa-close"></i> No</button>
                                            <a href="#">Report</a>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <form id="courseReviewForm" class="elh-course-review-form" action="#" method="post">
                                <p class="lead elh-theme-color">Write a Review</p>
                                <div class="elh-rating-inputs">
                                    <label class="elh-rate-on"><input type="radio" name="rate-value" value="1"><i class="star"></i></label>
                                    <label><input type="radio" name="rate-value" value="2"><i class="star"></i></label>
                                    <label><input type="radio" name="rate-value" value="3"><i class="star"></i></label>
                                    <label><input type="radio" name="rate-value" value="4"><i class="star"></i></label>
                                    <label><input type="radio" name="rate-value" value="5"><i class="star"></i></label>
                                </div>
                                <textarea name="review-message" rows="4"></textarea>
                                <button class="btn" type="submit" disabled="">Submit</button>
                            </form>
                        </div>
                    -->

                    <!-- Student feedback end -->

                    <!-- Related Posts -->
                    <!-- Related Posts End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Single End -->

    <!-- Subscription -->
    <div class="elh-section elh-theme-bg elh-subscribe-section style-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="elh-subscribe-heading">
                        <h3>Subscribe us for Future Updates</h3>
                    </div>
                </div>
                <div class="col-sm-6">
                    <form id="subscription" class="elh-subscribe-form pull-right xs-pull-center" action="#" method="post">
                        <input type="email" name="email" placeholder="Enter your mail here">
                        <button type="submit"><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscription End -->

</div>
<!-- Main wrapper start end -->
@endsection
