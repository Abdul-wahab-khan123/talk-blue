<?php include 'includes/links.php'; ?>
<main>
    <div class="main-deshboard">
        <?php include 'includes/sidebar.php'; ?>
        <div class="deshboard-wrap">
            <div class="container-fluid">
                <div class="sec-main">
                    <div class="search-area">
                        <form method="GET" action="">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="ct-flex-area">
                                        <button type="search" class="btn search-btn">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                        <input id="search" type="text" name="search" class="form-control ct-fm" placeholder="Search Order" value="">
                                        <button class="btn settings-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none"><path d="M15.7092 2.94546C15.7092 2.3629 15.882 1.79343 16.2056 1.30905C16.5293 0.824672 16.9893 0.447145 17.5275 0.224211C18.0657 0.00127622 18.6579 -0.0570536 19.2293 0.0565974C19.8007 0.170248 20.3255 0.450776 20.7374 0.862705C21.1494 1.27463 21.4299 1.79946 21.5435 2.37083C21.6572 2.94219 21.5989 3.53442 21.3759 4.07263C21.153 4.61085 20.7755 5.07086 20.2911 5.39451C19.8067 5.71816 19.2372 5.89091 18.6547 5.89091C17.8735 5.89091 17.1243 5.58059 16.5719 5.02821C16.0195 4.47583 15.7092 3.72664 15.7092 2.94546ZM0.981941 3.92728H12.7638C13.0242 3.92728 13.2739 3.82383 13.458 3.63971C13.6421 3.45558 13.7456 3.20585 13.7456 2.94546C13.7456 2.68506 13.6421 2.43533 13.458 2.25121C13.2739 2.06708 13.0242 1.96364 12.7638 1.96364H0.981941C0.721546 1.96364 0.471817 2.06708 0.28769 2.25121C0.103563 2.43533 0.00012207 2.68506 0.00012207 2.94546C0.00012207 3.20585 0.103563 3.45558 0.28769 3.63971C0.471817 3.82383 0.721546 3.92728 0.981941 3.92728ZM6.87285 6.87273C6.26516 6.87444 5.67287 7.06407 5.17719 7.41562C4.6815 7.76717 4.30668 8.26343 4.10412 8.83637H0.981941C0.721546 8.83637 0.471817 8.93981 0.28769 9.12394C0.103563 9.30806 0.00012207 9.55779 0.00012207 9.81819C0.00012207 10.0786 0.103563 10.3283 0.28769 10.5124C0.471817 10.6966 0.721546 10.8 0.981941 10.8H4.10412C4.28424 11.3094 4.60103 11.7595 5.01981 12.101C5.4386 12.4424 5.94324 12.6621 6.47852 12.736C7.01379 12.8098 7.55907 12.735 8.05468 12.5197C8.55028 12.3045 8.97711 11.957 9.28846 11.5154C9.59981 11.0737 9.78368 10.555 9.81994 10.0158C9.8562 9.4767 9.74345 8.93798 9.49404 8.45864C9.24464 7.97929 8.86817 7.5778 8.40586 7.29808C7.94355 7.01836 7.4132 6.87121 6.87285 6.87273ZM20.6183 8.83637H12.7638C12.5034 8.83637 12.2536 8.93981 12.0695 9.12394C11.8854 9.30806 11.7819 9.55779 11.7819 9.81819C11.7819 10.0786 11.8854 10.3283 12.0695 10.5124C12.2536 10.6966 12.5034 10.8 12.7638 10.8H20.6183C20.8787 10.8 21.1284 10.6966 21.3126 10.5124C21.4967 10.3283 21.6001 10.0786 21.6001 9.81819C21.6001 9.55779 21.4967 9.30806 21.3126 9.12394C21.1284 8.93981 20.8787 8.83637 20.6183 8.83637ZM8.83649 15.7091H0.981941C0.721546 15.7091 0.471817 15.8125 0.28769 15.9967C0.103563 16.1808 0.00012207 16.4305 0.00012207 16.6909C0.00012207 16.9513 0.103563 17.201 0.28769 17.3852C0.471817 17.5693 0.721546 17.6727 0.981941 17.6727H8.83649C9.09688 17.6727 9.34661 17.5693 9.53074 17.3852C9.71486 17.201 9.81831 16.9513 9.81831 16.6909C9.81831 16.4305 9.71486 16.1808 9.53074 15.9967C9.34661 15.8125 9.09688 15.7091 8.83649 15.7091ZM20.6183 15.7091H17.4961C17.2645 15.054 16.8088 14.5019 16.2095 14.1503C15.6102 13.7988 14.9059 13.6704 14.221 13.7879C13.5362 13.9054 12.915 14.2612 12.4671 14.7924C12.0193 15.3236 11.7737 15.9961 11.7737 16.6909C11.7737 17.3857 12.0193 18.0582 12.4671 18.5894C12.915 19.1207 13.5362 19.4765 14.221 19.594C14.9059 19.7114 15.6102 19.5831 16.2095 19.2315C16.8088 18.8799 17.2645 18.3278 17.4961 17.6727H20.6183C20.8787 17.6727 21.1284 17.5693 21.3126 17.3852C21.4967 17.201 21.6001 16.9513 21.6001 16.6909C21.6001 16.4305 21.4967 16.1808 21.3126 15.9967C21.1284 15.8125 20.8787 15.7091 20.6183 15.7091Z" fill="white">
                                            </path>
                                            </svg>
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="inner-area">
                    <div class="home-area">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                <div class="card multi-card stats-card">
                                    <div class="top-area">
                                        <div class="detail">
                                            <img src="assets/images/icon5.png"
                                                style="width: 20px;" class="img-fluid" alt="icon">
                                            <h6>All Orders</h6>
                                        </div>
                                        <div class="action">
                                            <i class="fa-light fa-ellipsis-stroke-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <h5>12</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                <div class="card multi-card stats-card">
                                    <div class="top-area">
                                        <div class="detail">
                                            <img src="assets/images/icon6.png"
                                                style="width: 20px;" class="img-fluid" alt="icon">
                                            <h6>Open Orders</h6>
                                        </div>
                                        <div class="action">
                                            <i class="fa-light fa-ellipsis-stroke-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <h5>69</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                <div class="card multi-card stats-card">
                                    <div class="top-area">
                                        <div class="detail">
                                            <img src="assets/images/icon7.png"
                                                class="img-fluid" alt="icon">
                                            <h6>Delivered Orders</h6>
                                        </div>
                                        <div class="action">
                                            <i class="fa-light fa-ellipsis-stroke-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <h5>0</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="card multi-card table-card">
                                    <div class="top-area">
                                        <h4>Recent Orders</h4>
                                    </div>
                                    <div class="table-area table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Order #</th>
                                                    <th>Date</th>
                                                    <th>User</th>
                                                    <th>Total Items</th>
                                                    <th>Total Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>order1</td>
                                                    <td>2026-8-1</td>
                                                    <td>Kevin</td>
                                                    <td>31</td>
                                                    <td>$2</td>
                                                    <td>
                                                        <div class="ct-flex">
                                                            <a href="lesson-detail.php"
                                                                class="btn btn-Order hvr-bounce-to-right">View Course
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>order1</td>
                                                    <td>2026-8-1</td>
                                                    <td>Kevin</td>
                                                    <td>31</td>
                                                    <td>$2</td>
                                                    <td>
                                                        <div class="ct-flex">
                                                            <a href="lesson-detail.php"
                                                                class="btn btn-Order hvr-bounce-to-right">View Course
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>order1</td>
                                                    <td>2026-8-1</td>
                                                    <td>Kevin</td>
                                                    <td>31</td>
                                                    <td>$2</td>
                                                    <td>
                                                        <div class="ct-flex">
                                                            <a href="lesson-detail.php"
                                                                class="btn btn-Order hvr-bounce-to-right">View Course
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'includes/script.php'; ?>