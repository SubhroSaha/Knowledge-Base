var dataLayer = [
  {
    ecommerce: {
      purchase: {
        productFulfiller: "Kingswere Furniture LLC an Ashley Furniture HomeStore",
        actionField: {
          id: "00000220",
          affiliation: "Ashley-US",
          revenue: 819.98,
          tax: 70.5,
          shipping: 119.99,
          coupon: "",
          action: "purchase",
        },
        products: [
          {
            id: "2100138",
            name: "Antonlini Sofa",
            brand: "Ashley",
            manufacturerSKU: null,
            upc: "024052518894",
            category: "Furniture/Living Room Furniture/Sofas & Couches",
            isCompositeProduct: false,
            dimension27: true,
            dimension28: true,
            dimension34: true,
            dimension35: "White",
            dimension37: "Mane + Mason™",
            dimension38: "Fabric",
            dimension39: "Solid",
            dimension47: "Chenille,Textured",
            dimension49: "Stationary",
            dimension68: 146,
            dimension15: "Home Delivery",
            metric1: 41,
            metric2: 799.99,
            price: 719.99,
            metric3: 80,
            dimension43: "Product",
            dimension110: true,
            dimension112: "FURNPRO",
            dimension113: true,
            selectedPPSkus: "FURNPRO",
            dimension102: "HD",
            dimension134: false,
            dimension142: "947c3ff4f9645be86a5f6a210b",
            dimension143: "HD",
            quantity: 1,
            adjustedNetPrice: 719.99,
            standardPrice: 799.99,
            shipBy: "Kingswere Furniture LLC an Ashley Furniture HomeStore",
            itmStatus: "Current",
            couponCodesApplied: [],
            tax: {
              currencyCode: "USD",
              amount: 54,
            },
            totalDiscount: {
              currencyCode: "USD",
              amount: "0.00",
            },
            dimension14: "In Stock",
            dimension16: "Place your order today, and we’ll ship as soon as possible. Estimated delivery time is 8-14 weeks.",
            dimension126: 43,
            position: 1,
          },
          {
            id: "FURNPRO",
            name: "Furniture Protection Plan",
            brand: "Ashley",
            manufacturerSKU: null,
            upc: "",
            category: "Furniture/Living Room Furniture/Sofas & Couches",
            isCompositeProduct: false,
            dimension15: "Direct Ship",
            metric1: 29,
            metric2: 0.01,
            price: 99.99,
            metric3: 0,
            dimension43: "Product",
            dimension110: false,
            dimension102: "DS",
            dimension134: false,
            dimension142: "947c3ff4f9645be86a5f6a210b",
            dimension143: "HD",
            quantity: 1,
            adjustedNetPrice: 99.99,
            standardPrice: 0.01,
            shipBy: "Ashcomm LLC ashleyfurniturehomestore.com",
            itmStatus: "Current",
            couponCodesApplied: [],
            tax: {
              currencyCode: "USD",
              amount: 7.5,
            },
            totalDiscount: {
              currencyCode: "USD",
              amount: "0.00",
            },
            dimension14: "In Stock",
            dimension16: "undefined",
            dimension126: null,
            position: 2,
          },
        ],
        altOrderId: "shz68SP432Im5J2p54qjYxbC0HbyWE6GT_aQnNhzxhk",
        ccType: "Visa",
        shipCountry: "USA",
        shipped: "20210524_1108",
        ordStatus: "NEW",
        purchaseDateTime: "2021-05-21 07:08:18-0400",
      },
    },
  },
  {
    "gtm.start": 1621595330027,
    event: "gtm.js",
    "gtm.uniqueEventId": 3,
  },
  {
    demandwareID: "bccZhY0r5fTYXjd166da276CLW",
    loggedInState: false,
    dimension21: false,
    dimension17: "33606",
    pageLanguage: "en_US",
    basket: [],
    subTotalWithPP: 0,
    basketTotalShipping: 0,
    basketTotalTax: 0,
  },
];

var ecomm = dataLayer.filter(function (item) {
  return item.ecommerce != undefined; //  && item.ecommerce.purchase != undefined
}); // [i].ecommerce.purchase.products.reduce

if (!ecomm[0].ecommerce) {
  return "blank";
}
ecomm = ecomm[0].ecommerce;
var dataLayerOrder = ecomm.purchase.actionField; // window.dataLayer[i].ecommerce.purchase.actionField;
var products = ecomm.purchase.products; // window.dataLayer[i].ecommerce.products;
var orderStatus = ecomm.purchase.ordStatus;
var shipCountry = ecomm.purchase.shipCountry;
var shipped = ecomm.purchase.shipped;
var ccType = ecomm.purchase.ccType;
var altOrderId = ecomm.purchase.altOrderId;
var orderDateTime = ecomm.purchase.purchaseDateTime;

var totalDiscount = 0;
var cartTotalQuantity = 0;
var categories = [];
var subCategories = [];

console.log(products[0].category.split("/")[0]);

products.map(function (item) {
//   if (item.productID) {
//     item.id = item.productID;
//   }

  if (item.id) {
    var category = item.category.split('/')[0];
    console.log(category);
    categories.push(category != undefined ? category : '');
    var subCategory = item.category.split("/")[1];
    subCategories.push(subCategory != undefined ? subCategory : '');
  }
  
  if (item.totalDiscount) {
    totalDiscount += parseFloat(item.totalDiscount.amount);
  }

  cartTotalQuantity += item.quantity;
});

products.map(function(item) {
    
})

console.log({
    id: dataLayerOrder.id,
  //   altOrderId: altOrderId,
  //   ccType: ccType,
  //   shipCountry: shipCountry,
  //   shipped: shipped,
  //   orderStatus: orderStatus,
  //   total: dataLayerOrder.revenue,
  //   shipping: dataLayerOrder.shipping,
  //   tax: dataLayerOrder.tax,
    products: products,
  //   cartTotalQuantity: cartTotalQuantity,
  //   totalDiscount: totalDiscount,
  //   couponCode: dataLayerOrder.coupon,
  //   orderDateTime: orderDateTime,
  categories: categories,
  subCategories: subCategories,
});
