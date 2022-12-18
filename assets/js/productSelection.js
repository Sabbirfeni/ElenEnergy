const ALL_PRODUCTS = [
    {
        name: 'seamoss-gel',
        sliderImagesLink: ['seamoss-1.jpeg', 'seamoss-2.jpeg', 'seamoss-3.jpeg'],
        title: 'Sea Moss Gel',
        product_qualities: ['100% Natural & Organic', 'Gut Health & Digestion', 'Support Thyroid & Boost Your Energy', '24 Hour Customer Support', '92 Minerals In One capsule'],
        packages: [
            {
                quantity: '8oz -',
                price: '35.99'
            },
            {
                quantity: '16oz -',
                price: '47.99'
            },
            {
                quantity: '32oz -',
                price: '57.99'
            }
        ],
        offer: 'Spend Over $49.99 & Get One Jar At 50% Off! + Free Shipping When You Spend Over $100!',
        backgroundImageLink: 'seamoss-3.jpeg'
    },
    {
        name: 'sea-moss-capsules',
        sliderImagesLink: ['sea-moss-capsuls-1.jpeg', 'aboutUs.jpeg'],
        title: 'Sea Moss Capsules with Bladderwrack & Burdock',
        product_qualities: ['100% Natural & Organic', 'Gut Health & Digestion', 'Support Thyroid & Boost Your Energy', 'Support cell turnover for youthful looking skin', '92 Minerals In One capsule'],
        packages: [
            {
                quantity: '',
                price: '29.99'
            }
        ],
        offer: '',
        backgroundImageLink: 'sea-moss-capsuls-1.jpeg'
    },
    {
        name: 'sea-moss-dried',
        sliderImagesLink: ['sea-moss-dried-2.jpeg','sea-moss-dried-3.jpeg'],
        title: 'Sea Moss Dried',
        product_qualities: ['100% Natural & Organic', 'Gut Health & Digestion', 'Support Thyroid & Boost Your Energy', 'Support cell turnover for youthful looking skin'],
        packages: [
            {
                quantity: 'Purple Irish Sea Moss (Chondrus), Whole leaf, Dried - ',
                price: '35.00'
            },
            {
                quantity: 'Purple Irish Sea Moss (Chondrus), Powder, Dried - ',
                price: '30.00'
            },
            {
                quantity: 'Bladder Wrack (Fucus), Whole leaf, Dried - ',
                price: '25.00'
            },
            {
                quantity: 'Bladder Wrack (Fucus), Powder, Dried - ',
                price: '25.00'
            }
        ],
        offer: '',
        backgroundImageLink: 'sea-moss-dried-3.jpeg'
    },
    {
        name: 'mushroom-capsules',
        sliderImagesLink: ['all-in-one mashroom.jpeg', 'mushroom-capsules-1.jpeg', 'mushroom-capsules-3.jpeg'],
        title: 'Mushroom Capsules',
        product_qualities: ["Contains Lion's Mane, Turkey Tail, Reishi and Chaga", 
        'Supports focus and cognitive function',
        'Supports a healthy memory',
        '100% Natural & Organic', 'Gut Health & Digestion'],
        packages: [
            {
                quantity: '',
                price: '29.99'
            }
        ],
        offer: '',
        backgroundImageLink: 'mushroom-capsules-1.jpeg'
    },
    // {
    //     name: 'mushroom-teabags',
    //     sliderImagesLink: ['mushroom-capsules-2.jpeg', 'mushroom-capsules-1.jpeg', 'mushroom-capsules-3.jpeg'],
    //     title: 'RED REISHI Mushroom Capsules',
    //     product_qualities: ['100% Natural & Organic', 'Gut Health & Digestion'],
    //     packages: [
    //         {
    //             quantity: '',
    //             price: '12.76'
    //         }
    //     ],
    //     offer: '',
    //     backgroundImageLink: 'mushroom-capsules-1.jpeg'
    // }
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
                    <div class="carousel-inner"></div>
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
                    <h1>${productResult.title}</h1>
                    <ul class='product_qualities-container'></ul>
                    <div class='measure'></div>
                    <p>${productResult.offer}</p>
                    <div class='d-flex justify-content-end align-items-baseline'>
                        <div class='d-flex align-item-baseline m-2'>
                            <button class='btn btn-light decrement__btn'>-</button>
                            <span class='p-3 pt-1 pb-1 m-1 bg-light quantity__number'>1</span>
                            <button class='btn btn-light increment__btn'>+</button>
                        </div>
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
    document.querySelector('.carousel-inner').insertAdjacentHTML('beforeend', html);
})
document.querySelector('.carousel-item').classList.add('active')

productResult.product_qualities.forEach((quality) => {
    let html = `<li><p>${quality}</p></li>`
    document.querySelector('.product_qualities-container').insertAdjacentHTML('beforeend', html);
})

productResult.packages.forEach((value) => {
    let html = `<p class='package'>${value.quantity} <span class='fw-bold'>$</span><span class='fw-bold'>${value.price}</span></p>`
    document.querySelector('.measure').insertAdjacentHTML('beforeend', html);
})






// Product package selection
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


// Product quantity number increment and decrement
let incrementBtn = document.querySelector('.increment__btn');
let decrementBtn = document.querySelector('.decrement__btn');
let quantityNumber = document.querySelector('.quantity__number');
decrementBtn.disabled = true;

incrementBtn.addEventListener('click', () => { 
    let quantity = Number(quantityNumber.innerText);
    quantity++;
    
    if(quantity > 1) {
        decrementBtn.disabled = false;
    } else {
        decrementBtn.disabled = true;
    }
    quantityNumber.innerText = quantity;
})


decrementBtn.addEventListener('click', () => {
    
    let quantity = Number(quantityNumber.innerText);
    quantity--;

    if(quantity === 1) {
        decrementBtn.disabled = true;
    }
    quantityNumber.innerText = quantity;
 
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
