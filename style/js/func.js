function table_pagination(tableId, bodyId) {
    $('#nav').remove();
    $(tableId).after('<div id="nav"></div>');
    var rowsShown = 10;
    var $studentRows = $(bodyId + ' tr:visible');
    var rowsTotal = $studentRows.length;
    var numPages = Math.ceil(rowsTotal / rowsShown);
    var currentPage = 0;

    function displayPageNumbers(startPage) {
        $('#nav').empty();
        var maxPageNumbers = Math.min(5, numPages);
        var endPage = startPage + maxPageNumbers - 1;
        for (i = startPage; i <= endPage; i++) {
            var pageNum = i + 1;
            $('#nav').append('<a href="#" rel="'+i+'">'+pageNum+'</a> ');
        }
        $('#nav').prepend('<a href="#" class="prev">&lt;</a> '); // Previous arrow
        $('#nav').append('<a href="#" class="next">&gt;</a> '); // Next arrow
        $('#nav a').removeClass('active');
        $('#nav a[rel="'+currentPage+'"]').addClass('active');
    }

    function showRows(startItem, endItem) {
        $studentRows.css('opacity','0.0').hide().slice(startItem, endItem)
            .css('display','table-row').animate({opacity:1}, 300);
    }

    displayPageNumbers(currentPage);
    showRows(0, rowsShown);

    $('#nav').on('click', 'a', function(e){
        e.preventDefault();
        if ($(this).hasClass('prev')) { // Previous arrow clicked
            if (currentPage > 0) {
                currentPage--;
            }
        } else if ($(this).hasClass('next')) { // Next arrow clicked
            if (currentPage < numPages - 1) {
                currentPage++;
            }
        } else {
            currentPage = parseInt($(this).attr('rel'));
        }
        var startItem = currentPage * rowsShown;
        var endItem = Math.min(startItem + rowsShown, rowsTotal);
        showRows(startItem, endItem);
        var startPage = Math.max(0, currentPage - 2); // Adjust startPage to show 5 page numbers
        displayPageNumbers(startPage);
    });
}

function debounce(func, delay) {
    let timeout;
    return function(...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), delay);
    };
}

function setup_Table_Search(searchInputId, tableId) {
    $(`#${searchInputId}`).on("keyup", debounce(function() {
        $('#loadprocessing').removeClass('d-none'); // Show loading indicator
        var value = $(this).val().toLowerCase();
        
        $(`#${tableId} tbody tr`).each(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });

        table_pagination(`#${tableId}`, `#${tableId} tbody`); // Ensure table_pagination works with these IDs
        
        $('#loadprocessing').addClass('d-none'); // Hide loading indicator after processing
    }, 100)); // Adjust the delay as needed
}

