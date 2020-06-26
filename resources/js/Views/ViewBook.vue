<template>
   <div class="book-wrapper container">
       <div class="book-header p-5">
           <h1 class="font-weight-bold">{{ book.book_name }}</h1>
           <p>{{ book.book_dasc }}</p>
          <div class="d-flex">
              <p style="font-size: 24px; padding-top: 10px;">Author : </p>
              <button type="button" class="btn btn-outline-primary text-white mx-3" >{{ book.book_author}}</button>
          </div>
          <div class="d-flex py-2">
              <button type="button" class="btn btn-primary mx-5  my-3">
                <span class="badge badge-light">{{ book.book_condition }} Book</span>
              </button>
              <button type="button" class="btn btn-primary">
                  Price <span class="badge badge-light">{{ book.book_price }} tk</span>
              </button>
          </div>
        <div class="d-flex my-3">
            <button type="button" class="btn btn-outline-success" v-if="book.book_is_negotiable">Yes, You Can Negotiate.</button>
            <button type="button" class="btn btn-outline-danger"v-else-if="!book.book_is_negotiable">Sorry! You Cannot Negotiate.</button>
<!--            <button type="button" class="btn btn-outline-info float-right">{{book.book_published_at}}</button>-->
        </div>
           <button type="button" class="btn btn-outline-primary text-white" style="position: relative; right: 0;">Request Book</button>
       </div>
       <div class="book-container-body row">
           <div class="card col-md-5" style="width: 18rem; margin: 40px" v-for="bi in book.book_images">
               <img class="card-img-top" src="../images/SBH.png" alt="Card image cap">
           </div>
       </div>

   </div>
</template>
<style>
    .book-wrapper{
        position: relative;
        height: 100vh;
        top: 68px;
    }
    .book-header{
        background: linear-gradient(45deg, #202fe6d4, #00000054);
        color: white;
    }
</style>
<script>
    export default {
        data(){
            return{
                book: {
                    book_name: "Apocalipto",
                    book_author: "Rabindronath Tagor",
                    book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.',
                    book_price: 100,
                    book_condition: 'OLD',
                    book_is_negotiable: true,
                    // book_published_at: this.data(),
                    book_images:[
                        '../images/SBH.png',
                        '../images/SBH.png',
                        '../images/SBH.png',
                        '../images/SBH.png',
                    ]
                },
            }
        }
    }
</script>
