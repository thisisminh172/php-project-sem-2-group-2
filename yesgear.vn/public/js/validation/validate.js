/**
 * This form contain all the functions to check pattern of each data
 * Created by Minh Le
 */

//contain all funciton use for validation input data

//
function checkUsername(username) {
    username = username.trim();
    const pattern = /^([a-z0-9](_|-)?){6,32}$/;
    return pattern.test(username);
}

function checkFullname(fullname) {
    fullname = fullname.trim();
    const pattern = /^[A-Za-z ]{1,100}$/;
    return pattern.test(fullname);
}

function checkBankAccount(bankAccount) {
    bankAccount = bankAccount.trim();
    const pattern = /^[0-9]{7,17}$/;
    return pattern.test(bankAccount);
}

function checkAddress(address) {

}

function checkEmail(email) {
    email = email.trim();
    const pattern = /^[A-Za-z0-9]{5,32}@[a-zA-Z0-9]{2,12}(.[a-z0-9]{2,4})+$/;
    return pattern.test(email);
}

function checkPhoneNumber(phoneNumber) {
    phoneNumber = phoneNumber.trim();
    const pattern = /^[0-9]{8,12}$/;
    return pattern.test(phoneNumber);
}
//use for all product data: name,brand,category



function checkNameSlug(nameSlug) {
    nameSlug = nameSlug.trim();
    const pattern = /^[a-z0-9-]+$/;
    return pattern.test(nameSlug);
}


// let temp = '0901496630';
// console.log(checkPhoneNumber(temp));
// console.log(temp);