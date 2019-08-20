(function ($) {
    $(function () {

        var tagAddedHiddenInputField = $('input#tag-added') , tagAdded;
        var tagChips =  $('.chips');
        var totalChips = 1;
        var category = "";
        var postCategory = $('select#post-category');
        var categorySelect = document.getElementById(postCategory.attr('id'));
        var subCategory = "";
        var categoryField = $('#category');
        var subCategoryField = $('#subcategory');
        var categories;
        var defaultTag;
        //Get the tags
        $.get('/api/tags' , function (response) {

            response = JSON.parse(response);
            categories = response.categories;
            var autoSuggestData = {};

            var  i;
            for(i = 0; i < response.tags.length; ++i)
            {
                autoSuggestData[response.tags[i]] = null
            }

            category = categorySelect.options[categorySelect.selectedIndex].value;
            subCategory = categorySelect.options[categorySelect.selectedIndex].text;

            categoryField.val(category);
            subCategoryField.val(subCategory);

            tagChips.chips({
                autocompleteOptions:
                    {
                        data : autoSuggestData
                    }
                ,
                limit: defaults.maxTagLength,
                minLength:2,
                placeholder:"post tags",
                data : [
                    {
                        tag : response.tags[0]
                    }
                ],

                onChipAdd : function () {
                    tagAddedHiddenInputField.val("1");
                    ++totalChips;
                },

                onChipDelete : function () {
                    --totalChips;

                    if(totalChips === 0)
                    {
                        tagAddedHiddenInputField.val('0');
                    }
                }
            });

        });




        postCategory.change(function () {
            tagAdded = parseInt(tagAddedHiddenInputField.val());
            category = categorySelect.options[categorySelect.selectedIndex].value;
            subCategory = categorySelect.options[categorySelect.selectedIndex].text;

            categoryField.val(category);
            subCategoryField.val(subCategory);
            //Remove the current chip
            if(totalChips === 1)
            {

                var instance  = M.Chips.getInstance(document.getElementById('tag-chips'));
                instance.deleteChip(0);

                defaultTag = categories[category.toLowerCase()][subCategory.toLowerCase()][0];
                instance.addChip({
                    tag : defaultTag
                }
                )
            }

        });

    });
})(jQuery);