var cart = {
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
        dimension134: false,
        dimension142: "38f383813bfa14c20f003a0d1f",
        dimension143: "HD",
        quantity: 1,
        adjustedNetPrice: 719.99,
        standardPrice: 799.99,
        shipBy: "Kingswere Furniture LLC an Ashley Furniture HomeStore",
        itmStatus: "Current",
        couponCodesApplied: [],
        tax: { currencyCode: "USD", amount: 54 },
        totalDiscount: { currencyCode: "USD", amount: "0.00" },
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
        category: "",
        isCompositeProduct: false,
        dimension15: "Direct Ship",
        metric1: 29,
        metric2: 0.01,
        price: 149.99,
        metric3: 0,
        dimension43: "Product",
        dimension110: false,
        dimension134: false,
        dimension142: "38f383813bfa14c20f003a0d1f",
        dimension143: "HD",
        quantity: 1,
        adjustedNetPrice: 149.99,
        standardPrice: 0.01,
        shipBy: "Ashcomm LLC ashleyfurniturehomestore.com",
        itmStatus: "Current",
        couponCodesApplied: [],
        tax: { currencyCode: "USD", amount: 11.25 },
        totalDiscount: { currencyCode: "USD", amount: "0.00" },
        dimension14: "In Stock",
        dimension16: "undefined",
        dimension126: null,
        position: 2,
      },
      {
        id: "T831-3",
        name: "Borlofield End Table",
        brand: "Ashley",
        manufacturerSKU: null,
        upc: "024052498585",
        category: "Furniture/Living Room Furniture/Coffee And End Tables",
        isCompositeProduct: false,
        dimension34: true,
        dimension35: "Black/Gray",
        dimension37: "Vintage Casual®",
        dimension38: "Wood Products and Other",
        dimension39: "Solid",
        dimension51: "1 Shelf",
        dimension59: "Rectangular",
        dimension68: 33,
        dimension15: "Direct Ship",
        metric1: 33,
        metric2: 249.99,
        price: 149.99,
        metric3: 100,
        dimension43: "Product",
        dimension110: true,
        dimension112: "FURNPRO",
        dimension113: true,
        selectedPPSkus: "FURNPRO",
        dimension134: false,
        dimension142: "38f383813bfa14c20f003a0d1f",
        dimension143: "HD",
        quantity: 2,
        adjustedNetPrice: 149.99,
        standardPrice: 249.99,
        shipBy: "Kingswere Furniture LLC an Ashley Furniture HomeStore",
        itmStatus: "Current",
        couponCodesApplied: [],
        tax: { currencyCode: "USD", amount: 22.5 },
        totalDiscount: { currencyCode: "USD", amount: "0.00" },
        dimension14: "In Stock",
        dimension16: "Place your order today, and we’ll ship as soon as possible. Estimated delivery time is 8-14 weeks.",
        dimension126: 29,
        position: 3,
      },
    ],
  };
  
  var cartTotal = 0;
  var productIds = [];
  var categories = [];
  var subCategories = [];
  var quantity = 0;
  
  var products = cart.products;
  products.map(function(item){
    if(item.id){
      cartTotal += item.price;
      var prodId = item.id;
      productIds.push(prodId);
      var prodCategory = item.category.split('/')[0];
      categories.push( prodCategory != undefined ? prodCategory : '');
      var prodSubCategory = item.category.split('/')[1];
      subCategories.push( prodSubCategory != undefined ? prodSubCategory : '')
      quantity += item.quantity
    }
  })
  console.log(cartTotal);
  console.log(productIds);
  console.log(categories);
  console.log(subCategories);
  console.log(quantity);