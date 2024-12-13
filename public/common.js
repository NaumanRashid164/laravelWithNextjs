$(document).ready(function () {

    // Search by table name 
    $("input[data-search]").keyup(function () {
        let search = $(this).val();
        let target = $(this).attr("data-target");
        $("#load_more").hide();
        if (search.length > 2) {
            $.get(baselink + "/request/ajax", {
                case: "search",
                search: search,
            }, function (response) {
                if (response.success) {
                    $("." + target).html(response.data);
                    // Special case
                    $(".search_dishes").removeClass("d-none");
                    $(".tabcontentnew").addClass("d-none");
                    $(".spinner").hide();
                }
            }).fail(function (error) {
                console.log(error);
                toastr.error(error.statusText);
            });
        } else if (search == "") {
            $(".search_dishes").addClass("d-none");
            $(".tabcontentnew").removeClass("d-none");
        }
    });

    // To check specific field already exist or not
    $("input[data-checkName]").change(function () {
        let table = $(this).attr("data-table");
        let column = $(this).attr("data-checkName");
        $.get(baselink + "/request/ajax", {
            case: "checkName",
            column: column,
            table: table,
            value: $(this).val(),
        }).done(function (response) {
            if (response.success == false) {
                toastr.error(response.message);
            }
        }).fail(function (error) {
            console.log(error);
            toastr.error(error.statusText);
        });
    });

    // To Status update specific field
    $("select[data-status]").change(function () {
        let table = $(this).attr("data-status");
        let row = $(this).attr("data-row");
        let column = $(this).attr("name");
        let status = $(this).val();
        console.log("table: ", table, "coloumn:", column, "status:", status);
        $.get(baselink + "/request/ajax", {
            case: "status",
            column: column,
            table: table,
            row: row,
            status: status,
        }).done(function (response) {
            if (response.success == false) {
                toastr.error(response.message);
            } else {
                toastr.success(response.message);
            }
        }).fail(function (error) {
            console.log(error);
            toastr.error(error.statusText);
        });
    });
    // Copy to clipboard
    $("[data-copy]").click(function () {
        let element = $($(this).attr("data-copy"));
        let message = $(this).attr("data-message");
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        toastr.success(message);
    });
    // Hide or Show Field
    $("[data-show]").click(function () {
        let element = $($(this).attr("data-show"));
        if ($(this).is(":checked")) {
            if (element.hasClass("d-none"))
                element.removeClass("d-none");
            element.show();
        } else {
            element.addClass("d-none");
        }
    });
});

function readURL(input, output) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(output).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        if ($(output).hasClass("d-none")) {
            $(output).removeClass("d-none");
        }
    } else {
        alert('select a file to see preview');
        $(output).attr('src', '');
    }
}
// Image Preview 
$("input[data-image_preview]").change(function () {
    readURL(this, $(this).attr("data-image_preview"));
});

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function isEmpty(val) {
    return (val === undefined || val == null || val.length <= 0) ? true : false;
}


// Disable Past Dates from calender...Currently working for all Dates
if ($("input[type=date]").length > 0) {
    // setMinDate();
}
function setMinDate() {
    var dtToday = new Date();
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();

    if (month < 10)
        month = '0' + month.toString();
    if (day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;

    // or instead:
    // var maxDate = dtToday.toISOString().substr(0, 10);

    $("input[type=date]").attr('min', maxDate);
}


// Save object into form by Hidden field
function convertObjectIntoHiddenField(obj, formID) {
    $.each(obj, function (key, value) {
        // Check if the value is an array
        if (Array.isArray(value)) {
            // Loop through array elements and generate array hidden fields
            $.each(value, function (index, element) {
                var hiddenField = $('<input type="hidden">');

                // Set attributes for the array hidden field
                hiddenField.attr({
                    name: key + '[]',
                    value: element
                });

                // Append the array hidden field to the form
                $('#myForm').append(hiddenField);
            });
        } else {
            // Create a hidden input element for non-array values
            var hiddenField = $('<input type="hidden">');

            // Set attributes for the hidden field
            hiddenField.attr({
                name: key,
                value: value
            });

            // Append the hidden field to the form
            $('#' + formID).append(hiddenField);
        }
    });
}
// Format date object
function formatDate(date) {
    let day = date.getDate();
    let month = date.getMonth() + 1; // Months are zero-indexed, so add 1
    let year = date.getFullYear();

    return `${month.toString().padStart(2, '0')}/${day.toString().padStart(2, '0')}/${year}`;
}