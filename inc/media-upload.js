$(document).ready(function() {

    function media_upload(button_class) {
        $('body').on('click', button_class, function (e) {
            var button = this;
            
            wp.media.editor.send.attachment = function (props, attachment) {
                $('.custom_media_id').val(attachment.id);
                $('.custom_media_url').val(attachment.url);
                $('.custom_media_image').attr('src', attachment.url).css('display', 'block');
            }
            wp.media.editor.open(button);
            return false;
        });
    }
    media_upload('.custom_media_button');
});