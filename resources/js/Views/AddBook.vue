<template>
    <div class="home-wrapper py-5">
        <div class="Books-wrapper container">
            <div class="auth-header">
                <h3 class="text-center font-weight-bold">Add Book</h3>
                <form>
                    <div class="form-group">
                        <label for="book_name_label">Book Name</label>
                        <div class="d-flex">
                            <div class="col">
                                <input type="text" class="form-control" id="book_name_label" placeholder="Book name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="old_book" id="old_book_id" value="OLD">
                            <label class="form-check-label" for="old_book_id">Old</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="new_book" id="new_book_id" value="NEW">
                            <label class="form-check-label" for="new_book_id">New</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="book_price_id">Price</label>
                        <input type="number" class="form-control" id="book_price_id" placeholder="book price">
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="negotiable" id="negotiable_id" value="negotiable">
                            <label class="form-check-label" for="negotiable_id">Negotiable</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fixed_price" id="fixed_price_id" value="fixed">
                            <label class="form-check-label" for="fixed_price_id">Fixed Price</label>
                        </div>
                    </div>
                    <div class="form-check">
                        <label for="book_description_id">Book Description</label>
                        <textarea rows="5" class="form-control" id="book_description_id" placeholder="describe your book."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Book</button>
                </form>
            </div>
        </div>
    </div>
</template>
<style scoped>
    .book-menu-wrapper{
        height: 100vh;
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
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                    {book_name: "Apocalipto", book_image: '../images/SBH.png', book_dasc: 'he Mayan kingdom is at the height of its opulence and power but the foundations of the empire are beginning to crumble.', book_price: 100, boo_condition: 'OLD'},
                ]
            }
        }
    }
</script>
