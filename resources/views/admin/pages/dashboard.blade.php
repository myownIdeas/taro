@extends('admin.layout.header')
@section('content')
    <!-- top-bar end -->
    <!-- main-content start -->
<div class="dashboard-content">
    <div class="container-fluid">
        <div class="row">
                    <div class="col-lg-8">
                        <div class="cards">
                            <div class="heading">
                                <h2>My Cards</h2>
                                <a href="#">See All</a>
                            </div>
                            <div class="card-slider row">
                                    <div class="col-lg-6">
                                        <div class="single-card">
                                            <div class="first-card">
                                                <div class="chip-area">
                                                    <div class="balance">
                                                        <p>Balance</p>
                                                        <span>$5,756</span>
                                                    </div>
                                                    <div class="chip-img">
                                                        <img src="images/chip-img-1.png" alt="images">
                                                    </div>
                                                </div>
                                                <div class="holder">
                                                    <div class="single-holder">
                                                        <p>CARD HOLDER</p>
                                                        <span>Eddy Cusuma</span>
                                                    </div>
                                                    <div class="single-holder">
                                                        <p>VALID THRU</p>
                                                        <span>12/22</span>
                                                    </div>
                                                </div>
                                                <div class="card-number">
                                                    <p>3778 **** **** 1234</p>
                                                    <div class="master-img">
                                                        <img src="images/master-img.png" alt="images" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-card">
                                            <div class="second-card">
                                                <div class="chip-area">
                                                    <div class="balance">
                                                        <p>Balance</p>
                                                        <span>$5,756</span>
                                                    </div>
                                                    <div class="chip-img">
                                                        <img src="images/chip-img-2.png" alt="images">
                                                    </div>
                                                </div>
                                                <div class="holder">
                                                    <div class="single-holder">
                                                        <p>CARD HOLDER</p>
                                                        <span>Eddy Cusuma</span>
                                                    </div>
                                                    <div class="single-holder">
                                                        <p>VALID THRU</p>
                                                        <span>12/22</span>
                                                    </div>
                                                </div>
                                                <div class="card-number">
                                                    <p>3778 **** **** 1234</p>
                                                    <div class="master-img">
                                                        <img src="images/master-img-2.png" alt="images" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="recent-transaction">
                            <div class="heading">
                                <h2>Recent Transaction</h2>
                            </div>
                            <div class="transition-list">
                                <ul>
                                    <li class="card-transition">
                                        <div class="icon">
                                            <i class="flaticon-credit-card-1"></i>
                                        </div>
                                        <div class="name">
                                            <h5>Deposit from my Card</h5>
                                            <p>28 January 2021</p>
                                        </div>
                                        <div class="amount">
                                            <span>-$850</span>
                                        </div>
                                    </li>
                                    <li class="paypal-transition">
                                        <div class="icon">
                                            <i class="flaticon-paypal"></i>
                                        </div>
                                        <div class="name">
                                            <h5>Deposit Paypal</h5>
                                            <p>25 January 2021</p>
                                        </div>
                                        <div class="amount">
                                            <span>+$2,500</span>
                                        </div>
                                    </li>
                                    <li class="jemi-transition">
                                        <div class="icon">
                                            <i class="flaticon-coin"></i>
                                        </div>
                                        <div class="name">
                                            <h5>Jemi Wilson</h5>
                                            <p>21 January 2021</p>
                                        </div>
                                        <div class="amount">
                                            <span>+$5,400</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="long-chart">
                            <div class="heading">
                                <h2>Weekly Activity</h2>
                            </div>
                            <div class="main-chart">
                                <div class="points">
                                    <div class="deposit">
                                        <span>Diposit</span>
                                    </div>
                                    <div class="withdraw">
                                        <span>Withdraw</span>
                                    </div>
                                </div>
                                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pie-chart">
                            <div class="heading">
                                <h2>Expense Statistics</h2>
                            </div>
                            <div class="main-chart">
                                <div id="piechartContainer" style="height: 370px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="quick-transfer">
                            <div class="heading">
                                <h2>Quick Transfer</h2>
                            </div>
                            <div class="transfer">
                                <div class="transfer-active">
                                    <div class="single-transfer ceo">
                                        <div class="transfer-img">
                                            <img src="images/transfer-img-1.png" alt="images" />
                                        </div>
                                        <div class="name">
                                            <p>Livia Bator</p>
                                            <span>CEO</span>
                                        </div>
                                    </div>
                                    <div class="single-transfer">
                                        <div class="transfer-img">
                                            <img src="images/transfer-img-2.png" alt="images" />
                                        </div>
                                        <div class="name">
                                            <p>Randy Press</p>
                                            <span>Director</span>
                                        </div>
                                    </div>
                                    <div class="single-transfer">
                                        <div class="transfer-img">
                                            <img src="images/transfer-img-3.png" alt="images" />
                                        </div>
                                        <div class="name">
                                            <p>Workman</p>
                                            <span>Designer</span>
                                        </div>
                                    </div>
                                    <div class="single-transfer">
                                        <div class="transfer-img">
                                            <img src="images/transfer-img-3.png" alt="images" />
                                        </div>
                                        <div class="name">
                                            <p>Workman</p>
                                            <span>Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="transfer-amount">
                                    <p>Write Amount</p>
                                    <form action="#">
                                        <input type="text" placeholder="525.50">
                                        <button type="submit">Send <i class="flaticon-send"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="balance-history">
                            <div class="heading">
                                <h2>Balance History</h2>
                            </div>
                            <div class="balance-chart">
                                <div class="main-chart">
                                    <div id="areachartContainer" style="height: 235px; width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>
    <!-- main-content end -->
@endsection