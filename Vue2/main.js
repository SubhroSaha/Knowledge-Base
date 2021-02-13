var app = new Vue({
    el: '#app',
    data: {
        brand: 'Subzero',
        product: 'Socks',
        selectedVariant: 0,
        // image: 'https://www.vuemastery.com/images/challenges/vmSocks-green-onWhite.jpg',
        link: 'https://flaviocopes.com/vue-cheat-sheet/',
        // inStock: true,
        // inventory: 100,
        onSale: false,
        details: ["80% cotton", "20% polyster", "Unisex"],
        variants: [
            {
              variantId: 2234,
              variantColor: 'green',
              variantImage: 'https://www.vuemastery.com/images/challenges/vmSocks-green-onWhite.jpg',
              variantQuantity: 10
            },
            {
              variantId: 2235,
              variantColor: 'blue',
              variantImage: 'https://www.vuemastery.com/images/challenges/vmSocks-blue-onWhite.jpg',
              variantQuantity: 0
            }
        ],
        sizes: ["Small", "Medium", "Large"],
        cart: 0,
    },
    methods: {
        addToCart() {
            this.cart += 1
        },
        removeFromCart() {
            this.cart -= 1
        },
        updateProduct(index) {
            this.selectedVariant = index
            // console.log(index)
        }
    },
    computed: {
        title() {
            this.brand + ' ' + this.product
        },
        image() {
            return this.variants[this.selectedVariant].variantImage
        },
        inStock() {
            return this.variants[this.selectedVariant].variantQuantity
        }
    }
})


