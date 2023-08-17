<?php

function conbix_comment_form($conbix_comment_form_fields)
{
    $conbix_comment_form_fields['author'] = '
    <div class="row">
    <div class="col-sm-6 mb-30"> 
        <div class="news__details-left-contact-form-item conbix-contact-item">
            <span class="fal fa-user"></span>
            <input type="text" name="author" placeholder="' . esc_attr__('Full Name*', 'conbix') . '">
        </div>										
    </div>
    ';

    $conbix_comment_form_fields['email'] =  '
    <div class="col-sm-6 sm-mb-30">
        <div class="news__details-left-contact-form-item conbix-contact-item">
            <span class="fal fa-envelope"></span>
            <input type="email" name="email" placeholder="' . esc_attr__('Email Address*', 'conbix') . '">		
        </div>									
    </div>									
    ';

    $conbix_comment_form_fields['url'] = '
    <div class="col-sm-12 mb-30"> 
        <div class="news__details-left-contact-form-item conbix-contact-item">
            <span class="fal fa-globe"></span>
            <input type="text" name="url" placeholder="' . esc_attr__('https://', 'conbix') . '">
        </div>										
    </div>
    </div>
    ';

    return $conbix_comment_form_fields;
}

add_filter('comment_form_default_fields', 'conbix_comment_form');

function conbix_comment_default_form($default_form)
{

    $default_form['comment_field'] = '
    <div class="non-row">
    <div class="col-sm-12 mb-30"> 
        <div class="news__details-left-contact-form-item conbix-contact-item">
            <span class="fal fa-pen"></span>
            <textarea name="comment" required="required" placeholder="' . esc_attr__('Your Comment*', 'conbix') . '"></textarea>
        </div>										
    </div>
    ';

    $default_form['submit_button'] = '
    <button class="btn-one" type="submit">'.esc_html__('Submit Comment', 'conbix').'<i class="far fa-chevron-double-right"></i></button>
    ';

    $default_form['submit_field'] = '<div class="col-lg-12"><div class="news__details-left-contact-form-item">%1$s %2$s</div></div></div>';
    $default_form['comment_notes_before'] = '<div class="comment-required-title mb-30">' . esc_html__('Fields (*) Mark are Required', 'conbix') . '</div>';
    $default_form['title_reply'] = esc_html__('Leave A Comment', 'conbix');
    $default_form['title_reply_before'] = '<h4 class="comments-heading">';
    $default_form['title_reply_after'] = '</h4>';
    $default_form['title_reply_after'] = '</h4>';

    return $default_form;
}

add_filter('comment_form_defaults', 'conbix_comment_default_form');


function conbix_move_comment_field_to_bottom($fields)
{
    $comment_field = $fields['comment'];
    $cookies_field = $fields['cookies'];
    unset($fields['comment']);
    unset( $fields['cookies'] );
    $fields['comment'] = $comment_field;
    $fields['cookies'] = $cookies_field;
    return $fields;
}

add_filter('comment_form_fields', 'conbix_move_comment_field_to_bottom');
