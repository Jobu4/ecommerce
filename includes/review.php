<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300,400);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);

#reviews {
    padding: 1% 5%;
}

#reviews h3 {
    font-size: 1.5rem;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
}

.users-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

.user {
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    color: #9e9e9e;
    display: inline-block;
    font-family: 'Roboto', Arial, sans-serif;
    font-size: 16px;
    margin: 35px 10px 10px;
    max-width: 310px;
    min-width: 250px;
    position: relative;
    text-align: center;
    width: 100%;
    background-color: #ffffff;
    border-radius: 5px;
    border-top: 5px solid #d2652d;
}

.user *,
.user *:before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.1s ease-out;
    transition: all 0.1s ease-out;
}

.user figcaption {
    padding: 13% 10% 12%;
}

.user figcaption:before {
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    background-color: #fff;
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
    color: #d2652d;
    content: "\f10e";
    font-family: 'FontAwesome';
    font-size: 32px;
    font-style: normal;
    left: 50%;
    line-height: 60px;
    position: absolute;
    top: -30px;
    width: 60px;
}

.user h3 {
    color: #3c3c3c;
    font-size: 20px;
    font-weight: 300;
    line-height: 24px;
    margin: 10px 0 5px;
}

.user h4 {
    font-weight: 400;
    margin: 0;
    opacity: 0.5;
}

.user blockquote {
    font-style: italic;
    font-weight: 300;
    margin: 0 0 20px;
}
</style>
<!-- html -->
<section id="reviews">
    <h3>Client Reviews</h3>
    <div class="users-container">
        <?php
        include "./db.php";
        ?>
        <?php
        $query="SELECT * FROM review";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("QUERY FAILED");
        }
        while($row=mysqli_fetch_assoc($result)){
            $review_name=$row['review_name'];
            $review_content=$row['review_message'];



              ?>

        <figure class="user">
            <figcaption>
                <blockquote>
                    <p><?php echo $review_message; ?></p>
                </blockquote>
                <h3><?php echo $review_name; ?></h3>
            </figcaption>
        </figure>



        <?php } ?>
    </div>
</section>