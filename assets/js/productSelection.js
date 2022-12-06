const ALL_PRODUCTS = [
    {
        name: 'seamoss-gel',
        sliderImagesLink: ['seamoss-1.jpeg', 'seamoss-2.jpeg', 'seamoss-3.jpeg'],
        title: 'Sea Moss Gel',
        product_qualities: ['100% Natural & Organic', 'Gut Health & Digestion', 'Support Thyroid & Boost Your Energy', '24 Hour Customer Support', '92 Minerals In One Scoop'],
        packages: [
            {
                quantity: '8oz',
                price: '35.99'
            },
            {
                quantity: '16oz',
                price: '47.99'
            },
            {
                quantity: '32oz',
                price: '57.99'
            }
        ],
        backgroundImageLink: 'seamoss-3.jpeg'
    }
]

const urlParams = new URLSearchParams(window.location.search);
const searchedProductName = urlParams.get('productName');
const productResult = ALL_PRODUCTS.find(product => product.name === searchedProductName)

document.querySelector('.sectionContainer').innerHTML = `
    <section class='productDetails' style='background-image: url("assets/images/${productResult.backgroundImageLink}")'>
    <div class="container pb-3 pb-md-5">
        <div class="row p-3 p-md-0">
            <div class="col-lg-6 p-0">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                   
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6" style='background-color: gold;'>
                <div class='p-3 p-md-4'>
                    <h1>Sea Moss Gel</h1>
                    <ul>
                        <li><p>100% Natural & Organic</p></li>
                        <li><p>Gut Health & Digestion </p></li>
                        <li><p>Support Thyroid & Boost Your Energy</p></li>
                        <li><p>24 Hour Customer Support</p></li>
                        <li><p>92 Minerals In One Scoop</p></li>
                    </ul>
                    
                    <div class='measure'>
                        <p class='package' value='35.99'>8oz - $<span>35.99</span></p>
                        <p class='package' value='47.99'>16oz - $<span>47.99</span></p>
                        <p class='package' value='57.99'>32oz - $<span>57.99</span></p>
                    </div>
                    <p>Spend Over $49.99 & Get One Jar At 50% Off! + Free Shipping When You Spend Over $100! 📦</p>
                    <div class='d-flex justify-content-end'>
                        <button class='button bg-white text-black buyNow'>Buy Now</button>
                    </div>
                    <div class="alert"></div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    </section>
`

productResult.sliderImagesLink.forEach((link) => {
    let html = `<div class="carousel-item">
        <img src="assets/images/${link}" class="d-block" alt="...">
    </div>`
    document.querySelector('.carousel-inner').insertAdjacentHTML('beforeend', html);;
})
document.querySelector('.carousel-item').classList.add('active')

{/* <section class='productDetails' style='background-image: url("assets/images/seamoss-3.jpeg")'>
<div class="container pb-3 pb-md-5">
    <div class="row p-3 p-md-0">
        <div class="col-lg-6 p-0">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="assets/images/seamoss-1.jpeg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/images/seamoss-2.jpeg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/images/seamoss-3.jpeg" class="d-block" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-lg-6" style='background-color: gold;'>
            <div class='p-3 p-md-4'>
                <h1>Sea Moss Gel</h1>
                <ul>
                    <li><p>100% Natural & Organic</p></li>
                    <li><p>Gut Health & Digestion </p></li>
                    <li><p>Support Thyroid & Boost Your Energy</p></li>
                    <li><p>24 Hour Customer Support</p></li>
                    <li><p>92 Minerals In One Scoop</p></li>
                </ul>
                
                <div class='measure'>
                    <p class='package' value='35.99'>8oz - $<span>35.99</span></p>
                    <p class='package' value='47.99'>16oz - $<span>47.99</span></p>
                    <p class='package' value='57.99'>32oz - $<span>57.99</span></p>
                </div>
                <p>Spend Over $49.99 & Get One Jar At 50% Off! + Free Shipping When You Spend Over $100! 📦</p>
                <div class='d-flex justify-content-end'>
                    <button class='button bg-white text-black buyNow'>Buy Now</button>
                </div>
                <div class="alert"></div>
                
                
            </div>
        </div>
    </div>
</div>
</section> */}



    // <div class="carousel-item active">
    // <img src="assets/images/seamoss-1.jpeg" class="d-block" alt="...">
    // </div>
    // <div class="carousel-item">
    // <img src="assets/images/seamoss-2.jpeg" class="d-block" alt="...">
    // </div>
    // <div class="carousel-item">
    // <img src="assets/images/seamoss-3.jpeg" class="d-block" alt="...">
    // </div>








// Product selection
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
