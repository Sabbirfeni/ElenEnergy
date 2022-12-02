
const allPackage = document.querySelectorAll('.package');
const buyBtn = document.querySelector('.buyNow');
let selectedPackagePrice = 0;
let isClicked = false;
let alertMessage = document.querySelector('.alert');
let orderForm = document.querySelector('.orderForm');

allPackage.forEach((value) => {

    value.addEventListener('click', () => {
        selectPackage(value);
    })

    
    buyBtn.addEventListener('click', () => {

        if(isClicked) {
            console.log(orderForm)
            alertMessage.innerHTML = '';
            orderForm.classList.add('active');
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            document.body.style.overflowY = 'hidden';
            // document.querySelector('.form').innerHTML = selectedPackagePrice;
        } else {
            alertMessage.innerHTML = 'Please select a package first!';
        }

       
    })

})


document.querySelector('.cancelBtn').addEventListener('click', () => {
    orderForm.classList.remove('active');
    document.body.style.overflowY = 'auto';
})





function selectPackage(value) {
    allPackage.forEach((div) => {
        div.style.backgroundColor = '#00000000';
        div.style.border= '1px solid #0000007c';
    })

    value.style.backgroundColor = 'white';
    value.style.border = '1px solid #00000000';

    selectedPackagePrice = Number(value.children[0].innerHTML);
    isClicked = true;
}
