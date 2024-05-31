const product = [
    {
        id: 0,
        image: 'css/img/zdjecie1.jpg',
        title: 'An elegant bed for your pet',
        price: 80,
    },
    {
        id: 1,
        image: 'css/img/zdjecie2.jpg',
        title: 'Natural food for your hamster',
        price: 15,
    },
    {
        id: 2,
        image: 'css/img/zdjecie3.jpg',
        title: 'MULTI-LEVEL scratching post for a CAT',
        price: 120,
    },
    {
        id: 3,
        image: 'css/img/zdjecie4.jpg',
        title: 'Fishing bait',
        price: 10,
    },
    {
        id: 4,
        image: 'css/img/zdjecie5.jpg',
        title: 'A colorful dog chew',
        price: 5,
    },
    {
        id: 5,
        image: 'css/img/zdjecie6.jpg',
        title: 'Sea-colored velvet collar with metal rings',
        price: 15,
    },
    {
        id: 6,
        image: 'css/img/zdjecie7.jpg',
        title: 'Natural hay for rodents',
        price: 10,
    },
    {
        id: 7,
        image: 'css/img/zdjecie8.jpg',
        title: 'Eating bowl for your pet',
        price: 20,
    },
    {
        id: 8,
        image: 'css/img/zdjecie9.jpg',
        title: 'Turtle aquarium with island',
        price: 200,
    }
];

const categories = [...new Set(product.map((item)=>
{
    return item;
}))]

let i=0;

document.getElementById('root').innerHTML = categories.map((item)=>
{
    var{image, title, price} = item;
    return (
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
            <div class='bottom'>
                <p>${title}</p>
                <h2>$ ${price}.00</h2>`
                + "<button onclick='addtocart("+ (i++) +")'>Add to cart</button>" +
                `</div>
                </div>`
    )
}).join('')

var cart = [];

function addtocart(a) {
    cart.push({...categories[a]});
    displaycart();
}

function delElement(a) {
    cart.splice(a, 1);
    displaycart();
}

function displaycart(a) {
    let j=0, total=0;
    document.getElementById("count").innerHTML = cart.length;
    if(cart.length==0) {
        document.getElementById("cartItem").innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "$ "+0+".00";
    } else {
        document.getElementById("cartItem").innerHTML = cart.map((items) =>
        {
            var{image, title, price} = items;
            total = total + price;
            document.getElementById("total").innerHTML = "$ "+total+".00";
            return (`<div class='cart-item'>
                        <div class='row-img'>
                            <img class='rowimg' src=${image}>
                        </div>
                        <p style='font-size:12px;'>${title}</p>
                        <h2 style='font-size:15px;'>$ ${price}.00</h2>` +
                        "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
                    );
        }).join('');
    }
}