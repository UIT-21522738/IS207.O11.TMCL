const products = document.querySelector('.products-container');
const product_list = document.querySelectorAll('.product-object');
let this_page = 1;
let limit = 6;


function loadProduct() {
    let begin = limit * (this_page - 1);
    let end = (limit * this_page) - 1;
    product_list.forEach((item, index) => {
        if(index >= begin && index <= end) {
            item.style.display ='block';
        } else {
            item.style.display = 'none';
        }
    })
    loadList();
}
loadProduct()
function loadList() {
    let count = Math.ceil(product_list.length/limit);
    document.querySelector('.pagination').innerHTML = "";
    for( let i=1; i <= count; i++) {
        let newPage = document.createElement("li");
        newPage.innerText = i;
        newPage.setAttribute("class", "pagination-item");
        if(i== this_page) {
            newPage.classList.add("active");
        }
        newPage.setAttribute("onclick", "changePage("+i+")");
        document.querySelector(".pagination").appendChild(newPage);
    }
   
}

function changePage(i) {
    this_page = i;
    loadProduct();
}

// change grid

const grid_list = document.querySelector('.grid-choice');
const objectIMGs = document.querySelectorAll('.object-img');
const productObjects = document.querySelectorAll('.product-object');
const grid = document.querySelector('#grid');
const feed = document.querySelector('#feed');

const counter= document.querySelector('.counter');
counter.innerHTML = productObjects.length +" "+ "items";

grid.addEventListener("click", () => {
    productObjects.forEach((product,index) => {
        product.style.width = "250px";
    })
    objectIMGs.forEach((objectIMG,index) => {
        objectIMG.style.width = "250px";
    })
   
})

feed.addEventListener("click", () => {
    productObjects.forEach((product,index) => {
        product.style.width = "320px";
    })
    objectIMGs.forEach((objectIMG,index) => {
        objectIMG.style.width = "320px";
    })
   
})

function toggleModalComplimentary() {
    document.getElementById('cd_modal-complimentary').classList.toggle('hidden');
}
function toggleModalReturning() {
    document.getElementById('cd_modal-return').classList.toggle('hidden');
}
function toggleModalGift() {
    document.getElementById('cd_modal-gift').classList.toggle('hidden');
}

// filter section

const ratioButtons = document.querySelectorAll('.ratio-btn');

ratioButtons.forEach((ratioButton, index) => {
    ratioButton.addEventListener('change', (e) =>{
        const sortBy = e.target.value;
        switch(sortBy) {
            case 'low-to-high':
                sortProductsByPriceL2H();
                break;
            case 'high-to-low':
                sortProductsByPriceH2L();      
                break; 
            default :
                break;
        }
    })
})

// Sort product elements based on price from high to low
function sortProductsByPriceH2L() {
    const container = document.querySelector('.products-container');
    const productElements = Array.from(container.children);

    const sortedProductElements = productElements.sort((a, b) => {
        const priceAElement = a.querySelector('.item-price');
        const priceBElement = b.querySelector('.item-price');
        // Check if not null or undefined
        const priceA = priceAElement ? parseFloat(priceAElement.textContent.replace(/[^\d.]/g, '')) : 0;
        const priceB = priceBElement ? parseFloat(priceBElement.textContent.replace(/[^\d.]/g, '')) : 0;

        return priceB - priceA;
    });

    productElements.forEach(element => container.removeChild(element));
    sortedProductElements.forEach(element => container.appendChild(element));
}

// Sort product elements based on price from low to high
function sortProductsByPriceL2H() {
    const container = document.querySelector('.products-container');
    const productElements = Array.from(container.children);

    const sortedProductElements = productElements.sort((a, b) => {
        const priceAElement = a.querySelector('.item-price');
        const priceBElement = b.querySelector('.item-price');
        // Check 
        const priceA = priceAElement ? parseFloat(priceAElement.textContent.replace(/[^\d.]/g, '')) : 0;
        const priceB = priceBElement ? parseFloat(priceBElement.textContent.replace(/[^\d.]/g, '')) : 0;

        return priceA - priceB;
    });
    // nếu element ở sai vị trí thì xóa
    productElements.forEach(element => container.removeChild(element));
    // sau đó sắp xếp lại, container sẽ chứa các phần tử được sắp xếp
    sortedProductElements.forEach(element => container.appendChild(element));
}

// soft from az - za
const sortNameButtons = document.querySelectorAll('.az-item');

sortNameButtons.forEach((buttonName) => {
    buttonName.addEventListener('click', (e) => {
        const sortType = buttonName.getAttribute('data-sort-type');
        sortProductsByName(sortType);
    })
})

function sortProductsByName(sortType) {
    const container = document.querySelector('.products-container');
    const productElements = Array.from(container.children);

    const sortedProductElements = productElements.sort((a, b) => {
        const firstLetterA = getFirstLetterFromName(a);
        const firstLetterB = getFirstLetterFromName(b);

        if (sortType == 'az') {
            return firstLetterA.localeCompare(firstLetterB);
        } else if (sortType == 'za') {
            return firstLetterB.localeCompare(firstLetterA);
        }

        return 0;
    });

    productElements.forEach(element => container.removeChild(element));
    sortedProductElements.forEach(element => container.appendChild(element));
}
function getFirstLetterFromName(element) {
    const nameElement = element.querySelector('.info-name');
    if (nameElement) {
        const name = nameElement.textContent.trim();
        return name.charAt(0).toUpperCase();
    } else {
        return ''; 
    }
}