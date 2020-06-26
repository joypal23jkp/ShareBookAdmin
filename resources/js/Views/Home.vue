<template>
    <div class="home-wrapper py-5">
        <div class="Books-wrapper container">
            <div class="book-menu-wrapper p-5">
                <h1>Share Book</h1>
                <p>We all should keep sharing mentality. Share Book promotes this mentality to grow up.<br>
                  There are people who are not able to buy book. If we help them sharing our books then a positive impact to the society
                    can be made
                </p>
            </div>
            <div class="row py-3">
                <div class="col-md-4" v-for="b in this.books" type="b.book_name">
                    <div class="card" style="width: 100%; padding: 5px; margin: 5px;">
                        <img class="card-img-top" src="../images/chotrongo.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ b.book_name }}</h5>
                            <p class="card-text">
                               {{ b.book_dasc }}
                                <span class="font-weight-bold">({{ b.book_price }}tk)</span>
                            </p>
                            <router-link :to="{ name: 'view-book' }" class="btn btn-primary">View</router-link>
                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</template>
<style scoped>
    .book-menu-wrapper{
        height: 30vh;
        width: 100%;
        background: #3490dc;
    }
   .home-wrapper{
       width: 100%;
       height: 100%;
       position: relative;
       top: 18px;
   }
   .book-menu-wrapper h1{
        color: white;
       font-weight: bold;
    }
    .book-menu-wrapper p{
        color: #f8fafc;
        font-size: 14px;
    }
    .category-wrapper{

    }
</style>
<script>
    export default {
        data:()=>{
            return{
                books:[
                    {book_name: "Apocalipto", book_image: '../images/chotrongo.jpg', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/chotrongo.jpg', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/chotrongo.jpg', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/chotrongo.jpg', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/chotrongo.jpg', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/chotrongo.jpg', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/chotrongo.jpg', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/chotrongo.jpg', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/chotrongo.jpg', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/chotrongo.jpg', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/chotrongo.jpg', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/chotrongo.jpg', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    ]
            }
        }
    }
</script>
