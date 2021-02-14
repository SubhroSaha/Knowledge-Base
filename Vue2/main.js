Vue.component('product', {
    props: {
        premium: {
            type: Boolean,
            require: true
        }
    },
    template: `
    <div class="product">
        <div class="product-image">
            <a :href="link">
                <img v-bind:src="image" >
            </a>
        </div>
        <div class="product-info">
            <!-- <h1>{{ product }}</h1> -->
            <!-- <p v-if="inventory > 10">In Stock</p> -->
            <!-- <p v-else-if="inventory > 0 && inventory <= 10">Almost sold out!</p> -->
            <!-- <p v-else>Out of Stock</p> -->
            <!-- <p v-show="!inStock">v-show</p> -->
            <!-- <p v-if="onSale">On Sale!</p> -->
            <h1>{{ brand }} {{ product }}</h1>
            <p v-if="inStock">In Stock</p>
            <p v-else :class="{ outOfStock: !inStock }">Out of Stock</p>
            <p>{{ sale }}</p>
            <p>Shipping: {{ shipping }}</p>

            <product-details :details="details"></product-details>

            <div v-for="(variant, index) in variants" 
                :key="variant.variantId"
                class="color-box"
                :style="{ backgroundColor: variant.variantColor }"
                @mouseover="updateProduct(index)">
                <!-- <p v-on:mouseover="updateProduct(variant.variantImage)">{{ variant.variantColor }}</p> -->
            </div>
            <ul>
                <li v-for="size in sizes">{{ size }}</li>
            </ul>
            <button v-on:click="addToCart"
                    :disabled="!inStock"
                    :class="{ disabledButton: !inStock }">Add to Cart</button>
            <button v-on:click="removeFromCart"
                    :disabled="!inStock"
                    :class="{ disabledButton: !inStock }">Remove</button>
            
        </div>
        
        <div>
        <h2>Reviews</h2>
        <p v-if="!reviews.length">There are no reviews yet.</p>
        <ul>
          <li v-for="review in reviews">
          <p>{{ review.name }}</p>
          <p>Rating: {{ review.rating }}</p>
          <p>{{ review.review }}</p>
          </li>
        </ul>
        </div>

        </br>
        
        <product-review @review-submitted='addReview'></product-review>
    </div>
    `,
    data() {
        return {
            brand: 'Subzero',
            product: 'Socks',
            selectedVariant: 0,
            // image: 'https://www.vuemastery.com/images/challenges/vmSocks-green-onWhite.jpg',
            link: 'https://flaviocopes.com/vue-cheat-sheet/',
            // inStock: true,
            // inventory: 100,
            onSale: true,
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
            reviews: []
        }
    },
    methods: {
        addToCart() {
            this.$emit('add-to-cart', this.variants[this.selectedVariant].variantId)
        },
        removeFromCart() {
            this.$emit('remove-from-cart')
        },
        updateProduct(index) {
            this.selectedVariant = index
            // console.log(index)
        },
        addReview(productReview) {
            this.reviews.push(productReview)
        }
    },
    computed: {
        title() {
            return this.brand + ' ' + this.product
        },
        image() {
            return this.variants[this.selectedVariant].variantImage
        },
        inStock() {
            return this.variants[this.selectedVariant].variantQuantity
        },
        sale() {
            if (this.onSale) {
                return this.brand + ' ' + this.product + ' are on sale!'
            }
            return this.brand + ' ' + this.product + ' are not on sale'
        },
        shipping() {
            if (this.premium) {
                return "Free"
            }
            return "Rs. 50"
        }
    }
})


Vue.component('product-details', {
    props: {
        details: {
            type: Array,
            require: true
        }
    },
    template: `
    <ul>
        <li v-for="detail in details">{{ detail }}</li>
    </ul> 
    `
})


Vue.component('product-review', {
    template: `
    <form class="review-form" @submit.prevent="onSubmit">

        <p v-if="errors.length">
        <b>Please correct the following error(s):</b>
            <ul>
                <li v-for="error in errors">{{ error }}</li>
            </ul>
        </p>

        <p>
        <label for="name">Name:</label>
        <input id="name" v-model="name" placeholder="name">
        </p>
        
        <p>
        <label for="review">Review:</label>      
        <textarea id="review" v-model="review"></textarea>
        </p>
        
        <p>
        <label for="rating">Rating:</label>
        <select id="rating" v-model.number="rating">
            <option>5</option>
            <option>4</option>
            <option>3</option>
            <option>2</option>
            <option>1</option>
        </select>
        </p>
            
        <p>
        <input type="submit" value="Submit">  
        </p>    
    
    </form>
    `,
    data() {
        return {
            name: null,
            review: null,
            rating: null,
            errors: []
        }
    },
    methods: {
        onSubmit() {
            if(this.name && this.review && this.rating) {
              let productReview = {
                name: this.name,
                review: this.review,
                rating: this.rating
              }
              this.$emit('review-submitted', productReview)
              this.name = null
              this.review = null
              this.rating = null
            } else {
              if(!this.name) this.errors.push("Name required.")
              if(!this.review) this.errors.push("Review required.")
              if(!this.rating) this.errors.push("Rating required.")
            }
        }
    }
})


var app = new Vue({
    el: '#app',
    data: {
        premium: true,
        cart: [],
    },
    methods: {
        updateCart(id) {
            this.cart.push(id)
        },
        removeCart(id) {
            this.cart.pop(id)
        }
    }
})


