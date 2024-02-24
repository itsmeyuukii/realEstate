// for Table
let table = new DataTable('#myTable');

// For tinyMCE editor text area


// automatically populate
$(document).ready(function () {

    $('#p_type').change(function () {
        var selectedValue = $(this).val();
        var subPropertyType = $('#p_class');

        // Clear previous options
        subPropertyType.empty();

        if (selectedValue === "House") {
            // Populate the second dropdown based on the selection
            console.log("House and Lot selected");
            subPropertyType.append('<option value="Subdivision">Subdivision</option>');
            subPropertyType.append('<option value="Residential">Residential</option>');
        } else if (selectedValue === "Lot") {
            // Populate the second dropdown based on the selection
            subPropertyType.append('<option value="Subdivision">Subdivision</option>');
            subPropertyType.append('<option value="Residential">Residential</option>');
            subPropertyType.append('<option value="Beach">Beach</option>');
            subPropertyType.append('<option value="Studio">Agricultural</option>');
            subPropertyType.append('<option value="Commercial">Commercial</option>');
            subPropertyType.append('<option value="Industrial">Industrial</option>');
        } else if (selectedValue === "Condominium") {
            // Populate the second dropdown based on the selection
            subPropertyType.append('<option value="Commercial">Commercial</option>');
            subPropertyType.append('<option value="Residential">Residential</option>');
        } else if (selectedValue === "TownHouse") {
            // Populate the second dropdown based on the selection
            subPropertyType.append('<option value="Subdivision">Subdivision</option>');
            subPropertyType.append('<option value="Residential">Residential</option>');
        } else if (selectedValue === "Building") {
            // Populate the second dropdown based on the selection
            subPropertyType.append('<option value="Residential">Residential</option>');
            subPropertyType.append('<option value="Commercial">Commercial</option>');
            subPropertyType.append('<option value="Industrial">Industrial</option>');
        } else if (selectedValue === "WareHouse") {
            // Populate the second dropdown based on the selection
            subPropertyType.append('<option value="Commercial">Commercial</option>');
            subPropertyType.append('<option value="Industrial">Industrial</option>');
        } else if (selectedValue === "Island") {
            // Populate the second dropdown based on the selection
            subPropertyType.append('<option value="Agricultural">Agricultural</option>');
            subPropertyType.append('<option value="Residential">Residential</option>');
            subPropertyType.append('<option value="Commercial">Commercial</option>');
        }
    });
});



//Modal for deleting property in admin
$(document).ready(function () {
    // Handle the click event for the delete button in each row
    $('.delete-property-btn').on('click', function () {
        // Get the property ID from the data attribute
        var propertyId = $(this).data('property-id');

        // Set the href of the confirm delete button in the modal
        $('#confirmDeleteButton').attr('href', '<?= base_url("propertystaging/deleteproperty/") ?>' + propertyId);
    });
});
//for key searchin in propertylist

