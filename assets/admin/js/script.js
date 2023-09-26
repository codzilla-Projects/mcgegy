jQuery(document).ready(function($) {



  $('.header_img_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.header_img').attr('src', attachment.url);

      $('.header_img_url').val(attachment.url);

    })

    .open();

  });  



    $('.footer_img_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.footer_img').attr('src', attachment.url);

      $('.footer_img_url').val(attachment.url);

    })

    .open();

  });

       $('.page_title_img_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.page_title_img').attr('src', attachment.url);

      $('.page_title_img_url').val(attachment.url);

    })

    .open();

  });


  

  $('.favicon_img_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.favicon_img').attr('src', attachment.url);

      $('.favicon_img_url').val(attachment.url);

    })

    .open();

  });

$('.about_img_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.about_img').attr('src', attachment.url);

      $('.about_img_url').val(attachment.url);

    })

    .open();

  });



$('.about_small_img_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.about_small_img').attr('src', attachment.url);

      $('.about_small_img_url').val(attachment.url);

    })

    .open();

  });



$('.about_img_ar_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.about_img_ar').attr('src', attachment.url);

      $('.about_img_ar_url').val(attachment.url);

    })

    .open();

  });



$('.about_small_img_ar_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.about_small_img_ar').attr('src', attachment.url);

      $('.about_small_img_ar_url').val(attachment.url);

    })

    .open();

  });

$('.about_ceo_img_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.about_ceo_img').attr('src', attachment.url);

      $('.about_ceo_img_url').val(attachment.url);

    })

    .open();

  });

$('.about_ceo_img_ar_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.about_ceo_img_ar').attr('src', attachment.url);

      $('.about_ceo_img_ar_url').val(attachment.url);

    })

    .open();

  });

$('.about_page_img_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.about_page_img').attr('src', attachment.url);

      $('.about_page_img_url').val(attachment.url);

    })

    .open();

  });

$('.about_page_img_ar_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.about_page_img_ar').attr('src', attachment.url);

      $('.about_page_img_ar_url').val(attachment.url);

    })

    .open();

  });

$('.information_img_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.information_img').attr('src', attachment.url);

      $('.information_img_url').val(attachment.url);

    })

    .open();

  });

$('.information_second_img_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.information_second_img').attr('src', attachment.url);

      $('.information_second_img_url').val(attachment.url);

    })

    .open();

  });



$('.information_img_ar_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.information_img_ar').attr('src', attachment.url);

      $('.information_img_ar_url').val(attachment.url);

    })

    .open();

  });

$('.information_second_img_ar_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.information_second_img_ar').attr('src', attachment.url);

      $('.information_second_img_ar_url').val(attachment.url);

    })

    .open();

  });


$('.services_page_img_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.services_page_img').attr('src', attachment.url);

      $('.services_page_img_url').val(attachment.url);

    })

    .open();

  });


$('.services_page_img_ar_upload').click(function(e) {

    e.preventDefault();

    var custom_uploader = wp.media({

      title: 'Image Choose',

      button: {

        text: 'Upload Image'

      },

      multiple: false  // Set this to true to allow multiple files to be  selected

    })

    .on('select', function() {

      var attachment = custom_uploader.state().get('selection').first().toJSON();

      $('.services_page_img_ar').attr('src', attachment.url);

      $('.services_page_img_ar_url').val(attachment.url);

    })

    .open();

  });



});

   