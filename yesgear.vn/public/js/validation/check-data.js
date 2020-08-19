//this file is always placed after validate.js

function check_data_of_new_product() {
    let productName = document.getElementById('product-name').value;
    let productDescription = document.getElementById('product-description').value;
    if (productName.length <= 0) {
        return false;
    }
    if (productDescription.length <= 0) {
        return false;
    }
    console.log(productName);
    console.log(productDescription);
    return true;
}