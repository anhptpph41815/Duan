<?php require('layout/header.php') ?>
<style>
    main {
        font-family: "Encode Sans SC", sans-serif;
    }

    .row img {
        max-width: 100%;
        width: 100%;
    }
</style>
<main>
    <div class="container">
        <div id="ant-layout">
            <section class="search-quan">
                <i class="fas fa-search"></i>
                <form action="thucdon.php" method="GET">
                    <input name="search" type="text" placeholder="Tìm kiếm">
                </form>
            </section>
            <section class="main">
                <div class="row">
                    <h3>Sweet là gì?</h3>
                    <p>Sweet sẽ mang đến cho bạn một bữa ăn ngon mang lại cho bạn sức khoẻ và tinh thần thoải mái nhất. Vì vậy, Sweet cho ra mắt dịch vụ trên, bạn chỉ cần đặt món ăn yêu thích trên Sweet, đội ngũ giao hàng của chúng tôi sẽ nhanh chóng mang đến cho bạn bữa ăn nóng hổi và ngon lành.</p>
                </div>
                <div class="row">
                    <h3>Sweet hoạt động như thế nào?</h3>
                    <p>Sweet hoạt động từ 7h đến 22h hằng ngày, tuỳ theo khung giờ bạn đặt</p>
                </div>
                <div class="row">
                    <img src="images/banner.jpg"  alt="">

                    <h3>Những món ăn , đồ uống trên ứng dụng?</h3>
                    <p>Để xem danh sách các món ăn và đồ uống bạn chỉ cần nhập địa chỉ của mình trên ứng dụng. Để đảm bảo đồ ăn nóng hổi, tươi ngon và được giao đến bạn nhanh chóng, Sweet sẽ quét vị trí của bạn và gaio cách nhanh nhất.</p>
                </div>
                <div class="row">
                    <h3>Tôi có thể thanh toán bằng tiền mặt không?</h3>
                    <p>Có nhé!</p>
                </div>
                <div class="row">
                    <h3>Tôi có thể thanh toán bằng VnPay không?</h3>
                    <p>Có nhé!</p>
                </div>
                <div class="row">
                    <h3>Chi phí được tính như thế nào?</h3>
                    <p>Chi phí hiển thị trên ứng dụng bao gồm chi phí của phần ăn theo đơn giá và phí vận chuyển.</p>
                </div>
        
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.280539447332!2d107.29400661486774!3d16.762712588455788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x80f122cab2275a42!2zTmd1eeG7hW4gxJDEg25nIFRow6BuaA!5e0!3m2!1svi!2s!4v1629007864673!5m2!1svi!2s" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <iframe src="./images/image 20.png" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>
        </div>
    </div>
</main>
<?php require('layout/footer.php') ?>