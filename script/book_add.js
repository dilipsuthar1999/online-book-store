function search()
{
    $('#search').submit(function()
    {
        $.ajax(
        {
            type: "POST",
            url: 'admin/book_search.php',
            data: $(this).serialize(),
            success: function(data)
            {       
                $("#result1").html(data);
            },
            error:function() 
            {
            }
        });
        return false;
    });
}