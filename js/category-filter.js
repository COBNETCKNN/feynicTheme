jQuery(document).ready(function($) {
    $('#category-filter').on('change', function() {
        var category_id = $(this).val();

        $.ajax({
            url: ajax_params.ajax_url,
            type: 'POST',
            data: {
                action: 'filter_posts_by_category',
                category_id: category_id
            },
            success: function(response) {
                $('#posts-container').html(response);
            }
        });
    });
});