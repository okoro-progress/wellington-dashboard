<!------------------------------------------------------------------------------>
<?php

include "dbh.php";



function getCellValue($conn, $column_name, $id)
{
    $query = "SELECT $column_name FROM testimonies WHERE id = $id";
    $result = $conn->query($query);

    if ($result) {
        $row = $result->fetch_assoc();
        $value = $row[$column_name];
        $result->free_result();
        return $value;
    } else {
        return null;
    }
}


$r1_name = getCellValue($conn, "name", 1);
$r1_status = getCellValue($conn, "status", 1);
$r1_picture = getCellValue($conn, "picture", 1);
$r1_testimony = getCellValue($conn, "testimony_message", 1);

$r2_name = getCellValue($conn, "name", 2);
$r2_status = getCellValue($conn, "status", 2);
$r2_picture = getCellValue($conn, "picture", 2);
$r2_testimony = getCellValue($conn, "testimony_message", 2);

$r3_name = getCellValue($conn, "name", 3);
$r3_status = getCellValue($conn, "status", 3);
$r3_picture = getCellValue($conn, "picture", 3);
$r3_testimony = getCellValue($conn, "testimony_message", 3);

$r4_name = getCellValue($conn, "name", 4);
$r4_status = getCellValue($conn, "status", 4);
$r4_picture = getCellValue($conn, "picture", 4);
$r4_testimony = getCellValue($conn, "testimony_message", 4);

$r5_name = getCellValue($conn, "name", 5);
$r5_status = getCellValue($conn, "status", 5);
$r5_picture = getCellValue($conn, "picture", 5);
$r5_testimony = getCellValue($conn, "testimony_message", 5);


$conn->close();


?>





<section id="testimonials" class="testimonials section-bg">
    <div class="container">
        <div class="section-title aos-init" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>Genuine feedbacks form real customers</p>
        </div>

        <div class="testimonials-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden aos-init"
            data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper" id="swiper-wrapper-510fd1c56c74efbc7" aria-live="off" style="
                transition-duration: 600ms;
                transform: translate3d(-2632px, 0px, 0px);
                ">

                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" role="group"
                    aria-label="4 / 5" style="width: 638px; margin-right: 20px" data-swiper-slide-index="3">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="./Wellington Workplace_files/dashboard/assets/img/<?php echo $r4_picture; ?>"
                                class="testimonial-img" alt="" />
                            <h3>
                                <?php echo $r4_name; ?>
                            </h3>
                            <h4>
                                <?php echo $r4_status; ?>
                            </h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <?php echo $r4_testimony; ?>
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="5 / 5"
                    style="width: 638px; margin-right: 20px" data-swiper-slide-index="4">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="./Wellington Workplace_files/dashboard/assets/img/<?php echo $r5_picture; ?>"
                                class="testimonial-img" alt="" />
                            <h3>
                                <?php echo $r5_name; ?>
                            </h3>
                            <h4>
                                <?php echo $r5_status; ?>
                            </h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <?php echo $r5_testimony; ?>
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 638px; margin-right: 20px"
                    data-swiper-slide-index="0">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="./Wellington Workplace_files/dashboard/assets/img/<?php echo $r1_picture; ?>"
                                class="testimonial-img" alt="" />
                            <h3>
                                <?php echo $r1_name; ?>
                            </h3>
                            <h4>
                                <?php echo $r1_status; ?>
                            </h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <?php echo $r1_testimony; ?>
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item ----------------------->

                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 5"
                    style="width: 638px; margin-right: 20px" data-swiper-slide-index="1">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="./Wellington Workplace_files/dashboard/assets/img/<?php echo $r2_picture; ?>"
                                class="testimonial-img" alt="" />
                            <h3>
                                <?php echo $r2_name; ?>
                            </h3>
                            <h4>
                                <?php echo $r2_status;
                                ; ?>
                            </h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <?php echo $r2_testimony; ?>
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item ------------>

                <div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 5"
                    style="width: 638px; margin-right: 20px" data-swiper-slide-index="2">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="./Wellington Workplace_files/dashboard/assets/img/<?php echo $r3_picture; ?>"
                                class="testimonial-img" alt="" />
                            <h3>
                                <?php echo $r3_name; ?>
                            </h3>
                            <h4>
                                <?php echo $r3_status; ?>
                            </h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <?php echo $r3_testimony; ?>
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item ----------->

                <div class="swiper-slide swiper-slide-next" role="group" aria-label="4 / 5"
                    style="width: 638px; margin-right: 20px" data-swiper-slide-index="3">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="./Wellington Workplace_files/dashboard/assets/img/<?php echo $r4_picture; ?>"
                                class="testimonial-img" alt="" />
                            <h3>
                                <?php echo $r4_name; ?>
                            </h3>
                            <h4>
                                <?php echo $r4_status; ?>
                            </h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <?php echo $r4_testimony; ?>
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item ----------->

                <div class="swiper-slide" role="group" aria-label="5 / 5" style="width: 638px; margin-right: 20px"
                    data-swiper-slide-index="4">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="./Wellington Workplace_files/dashboard/assets/img/<?php echo $r5_picture; ?>"
                                class="testimonial-img" alt="" />
                            <h3>
                                <?php echo $r5_name; ?>
                            </h3>
                            <h4>
                                <?php echo $r5_status; ?>
                            </h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <?php echo $r5_testimony; ?>
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item ----------->

                <div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="1 / 5"
                    style="width: 638px; margin-right: 20px" data-swiper-slide-index="0">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="./Wellington Workplace_files/dashboard/assets/img/<?php echo $r1_picture; ?>"
                                class="testimonial-img" alt="" />
                            <h3>
                                <?php echo $r1_name; ?>
                            </h3>
                            <h4>
                                <?php echo $r1_status; ?>
                            </h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <?php echo $r1_testimony; ?>
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group"
                    aria-label="2 / 5" style="width: 638px; margin-right: 20px" data-swiper-slide-index="1">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="./Wellington Workplace_files/dashboard/assets/img/<?php echo $r2_picture; ?>"
                                class="testimonial-img" alt="" />
                            <h3>
                                <?php echo $r2_name; ?>
                            </h3>
                            <h4>
                                <?php echo $r2_status; ?>
                            </h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <?php echo $r2_testimony; ?>
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!------------->
            <div
                class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                <span class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 2"></span><span
                    class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                    aria-label="Go to slide 3" aria-current="true"></span><span class="swiper-pagination-bullet"
                    tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet"
                    tabindex="0" role="button" aria-label="Go to slide 5"></span>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</section>


<!-- End Testimonials Section -->