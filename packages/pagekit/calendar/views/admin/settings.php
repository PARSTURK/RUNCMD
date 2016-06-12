<?php $view->script('calendar-settings', 'calendar:app/bundle/settings.js', 'vue') ?>

<div id="settings" class="uk-form uk-form-horizontal" v-cloak>

    <div class="uk-grid pk-grid-large" data-uk-grid-margin>
        <div class="pk-width-sidebar">

            <div class="uk-panel">

                <ul class="uk-nav uk-nav-side pk-nav-large" data-uk-tab="{ connect: '#tab-content' }">
                    <li><a><i class="pk-icon-large-settings uk-margin-right"></i> {{ 'General' | trans }}</a></li>
                </ul>

            </div>

        </div>
        <div class="pk-width-content">

            <ul id="tab-content" class="uk-switcher uk-margin">
                <li>

                    <div class="uk-margin uk-flex uk-flex-space-between uk-flex-wrap" data-uk-margin>
                        <div data-uk-margin>

                            <h2 class="uk-margin-remove">{{ 'General' | trans }}</h2>

                        </div>
                        <div data-uk-margin>

                            <button class="uk-button uk-button-primary" @click.prevent="save">{{ 'Save' | trans }}</button>

                        </div>
                    </div>

                    <div class="uk-form-row">
                        <span class="uk-form-label">{{ 'Permalink' | trans }}</span>
                        <div class="uk-form-controls uk-form-controls-text">
                            <p class="uk-form-controls-condensed">
                                <label>
                                    <input type="radio" v-model="config.permalink.type" value="">
                                    {{ 'Numeric' | trans }} <code>{{ '/123' | trans }}</code>
                                </label>
                            </p>
                            <p class="uk-form-controls-condensed">
                                <label>
                                    <input type="radio" v-model="config.permalink.type" value="{slug}">
                                    {{ 'Name' | trans }} <code>{{ '/sample-post' | trans }}</code>
                                </label>
                            </p>
                            <p class="uk-form-controls-condensed">
                                <label>
                                    <input type="radio" v-model="config.permalink.type" value="{year}/{month}/{day}/{slug}">
                                    {{ 'Day and name' | trans }} <code>{{ '/2014/06/12/sample-post' | trans }}</code>
                                </label>
                            </p>
                            <p class="uk-form-controls-condensed">
                                <label>
                                    <input type="radio" v-model="config.permalink.type" value="{year}/{month}/{slug}">
                                    {{ 'Month and name' | trans }} <code>{{ '/2014/06/sample-post' | trans }}</code>
                                </label>
                            </p>
                            <p class="uk-form-controls-condensed">
                                <label>
                                    <input type="radio" v-model="config.permalink.type" value="custom">
                                    {{ 'Custom' | trans }}
                                </label>
                                <input class="uk-form-small" type="text" v-model="config.permalink.custom">
                            </p>
                        </div>
                    </div>

                    <div class="uk-form-row">
                        <label class="uk-form-label">{{ 'events per page' | trans }}</label>
                        <div class="uk-form-controls uk-form-controls-text">
                            <p class="uk-form-controls-condensed">
                                <input type="number" v-model="config.posts.posts_per_page" class="uk-form-width-small">
                            </p>
                        </div>
                    </div>

                    <div class="uk-form-row">
                        <span class="uk-form-label">{{ 'Default event settings' | trans }}</span>
                        <div class="uk-form-controls uk-form-controls-text">
                            <p class="uk-form-controls-condensed">
                                <label><input type="checkbox" v-model="config.posts.markdown_enabled"> {{ 'Enable Markdown' | trans }}</label>
                            </p>
                        </div>
                    </div>

                </li>
            </ul>

        </div>
    </div>

</div>
