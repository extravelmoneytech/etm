<!DOCTYPE html>
<html lang="en">

<?php

    
    $fold = "";  

    include $fold . 'includes/head.php';
?>
<link rel="stylesheet" href="styles/countryPageStyles.css">
<body>
<div class="w-full chooseCityOverlayMain  relative" style="max-width: 103rem;">
<?php 

                include $fold . 'includes/header.php';

            ?>
<section class="cityPageContainer">
        <div class="headerSection">
            <div class="headings">
                <h2>Best Forex Rates In</h2>
                <span>Banglore</span>
            </div>

            <div class="flags">
                <img class="flag" src="<?php echo $fold . 'public/images/flags/india-in.svg'; ?>" alt="India Flag">
                <img class="flagConnector" src="<?php echo $fold . 'public/images/currencyConvert.svg'; ?>" alt="Currency Conversion">
                <img class="flag" src="<?php echo $fold . 'public/images/flags/usa-flag.svg'; ?>" alt="USA Flag">

            </div>
        </div>


        <div class="bodySection">
            <div class="contents">
                <div class="flex flex-col gap-2 w-[50%]">
                    <h1 class="headingText">
                        Key Points to Keep in Mind
                    </h1>
                    <p class="contentText">Our platform helps your business in managing expenses. These are some of the reasons why you should use our platform in managing business finances.</p>
                    <ul class="contentList mt-4">
                        <li>Our platform helps your business in managing expenses. </li>
                        <li>Our platform helps your business in managing expenses. These are some of the reasons </li>
                        <li>Our platform helps your business in managing expenses. </li>
                        <li>Our platform helps your business in managing expenses. These are some of the reasons why you should</li>
                    </ul>
                </div>
                <img src="<?php echo $fold . 'public/images/coin.png'; ?>" alt="Coin Image">
            </div>
            <div class="tableSection mt-16">
                <div class="tableContainer">
                    <div class="tableHeader">
                        <span>Popular Currencies</span>
                        <div class="moreOptions">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M9.9974 10.8333C10.4576 10.8333 10.8307 10.4602 10.8307 9.99992C10.8307 9.53968 10.4576 9.16659 9.9974 9.16659C9.53716 9.16659 9.16406 9.53968 9.16406 9.99992C9.16406 10.4602 9.53716 10.8333 9.9974 10.8333Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.9974 4.99992C10.4576 4.99992 10.8307 4.62682 10.8307 4.16659C10.8307 3.70635 10.4576 3.33325 9.9974 3.33325C9.53716 3.33325 9.16406 3.70635 9.16406 4.16659C9.16406 4.62682 9.53716 4.99992 9.9974 4.99992Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.9974 16.6666C10.4576 16.6666 10.8307 16.2935 10.8307 15.8333C10.8307 15.373 10.4576 14.9999 9.9974 14.9999C9.53716 14.9999 9.16406 15.373 9.16406 15.8333C9.16406 16.2935 9.53716 16.6666 9.9974 16.6666Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                        </div>
                        
                    </div>
                    <div class="tableHeading">
                        <span>Currency</span>
                        <span>Buy Currency (in INR)</span>
                        <span>Sell Currency (in INR)</span>
                    </div>
                    <div class="tableBody">
                        <div class="tableRow">
                            <div class="currencyDetails columnSpec">
                               <img class="currencyFlag" src="public/images/flags/usa-flag.svg" alt="">
                               <div class="curremcyNameContainer">
                                <p class="currencyShort">USD</p>
                                <span class="currencyFull">United States Dollar</span>
                               </div>
                            </div>

                            <div class="columnSpec">
                                <span class="buyValue">₹94.5</span>
                                <div class="buyBtn">
                                    <span>Buy USD</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 24" fill="none">
                                        <path d="M17.699 12.5307L10.199 20.0307C10.1293 20.1004 10.0466 20.1556 9.95556 20.1933C9.86451 20.2311 9.76693 20.2505 9.66839 20.2505C9.56984 20.2505 9.47226 20.2311 9.38121 20.1933C9.29017 20.1556 9.20744 20.1004 9.13776 20.0307C9.06808 19.961 9.0128 19.8783 8.97509 19.7872C8.93738 19.6962 8.91797 19.5986 8.91797 19.5001C8.91797 19.4015 8.93738 19.3039 8.97509 19.2129C9.0128 19.1218 9.06808 19.0391 9.13776 18.9694L16.1081 12.0001L9.13776 5.03068C8.99703 4.88995 8.91797 4.69907 8.91797 4.50005C8.91797 4.30103 8.99703 4.11016 9.13776 3.96943C9.27849 3.8287 9.46936 3.74963 9.66839 3.74963C9.86741 3.74963 10.0583 3.8287 10.199 3.96943L17.699 11.4694C17.7687 11.5391 17.8241 11.6218 17.8618 11.7128C17.8995 11.8039 17.919 11.9015 17.919 12.0001C17.919 12.0986 17.8995 12.1962 17.8618 12.2873C17.8241 12.3783 17.7687 12.461 17.699 12.5307Z" fill="#0E51A0"/>
                                      </svg>
                                </div>
                            </div>

                            <div class="columnSpec">
                                <span class="sellValue">₹94.5</span>
                                <div class="sellBtn">
                                    <span>Sell USD</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 24" fill="none">
                                        <path d="M17.699 12.5307L10.199 20.0307C10.1293 20.1004 10.0466 20.1556 9.95556 20.1933C9.86451 20.2311 9.76693 20.2505 9.66839 20.2505C9.56984 20.2505 9.47226 20.2311 9.38121 20.1933C9.29017 20.1556 9.20744 20.1004 9.13776 20.0307C9.06808 19.961 9.0128 19.8783 8.97509 19.7872C8.93738 19.6962 8.91797 19.5986 8.91797 19.5001C8.91797 19.4015 8.93738 19.3039 8.97509 19.2129C9.0128 19.1218 9.06808 19.0391 9.13776 18.9694L16.1081 12.0001L9.13776 5.03068C8.99703 4.88995 8.91797 4.69907 8.91797 4.50005C8.91797 4.30103 8.99703 4.11016 9.13776 3.96943C9.27849 3.8287 9.46936 3.74963 9.66839 3.74963C9.86741 3.74963 10.0583 3.8287 10.199 3.96943L17.699 11.4694C17.7687 11.5391 17.8241 11.6218 17.8618 11.7128C17.8995 11.8039 17.919 11.9015 17.919 12.0001C17.919 12.0986 17.8995 12.1962 17.8618 12.2873C17.8241 12.3783 17.7687 12.461 17.699 12.5307Z" fill="#0E51A0"/>
                                      </svg>
                                </div>
                            </div>
                            
                            
                        </div>

                        <div class="tableRow">
                            <div class="currencyDetails columnSpec">
                               <img class="currencyFlag" src="public/images/flags/usa-flag.svg" alt="">
                               <div class="curremcyNameContainer">
                                <p class="currencyShort">USD</p>
                                <span class="currencyFull">United States Dollar</span>
                               </div>
                            </div>

                            <div class="columnSpec">
                                <span class="buyValue">₹94.5</span>
                                <div class="buyBtn">
                                    <span>Buy USD</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 24" fill="none">
                                        <path d="M17.699 12.5307L10.199 20.0307C10.1293 20.1004 10.0466 20.1556 9.95556 20.1933C9.86451 20.2311 9.76693 20.2505 9.66839 20.2505C9.56984 20.2505 9.47226 20.2311 9.38121 20.1933C9.29017 20.1556 9.20744 20.1004 9.13776 20.0307C9.06808 19.961 9.0128 19.8783 8.97509 19.7872C8.93738 19.6962 8.91797 19.5986 8.91797 19.5001C8.91797 19.4015 8.93738 19.3039 8.97509 19.2129C9.0128 19.1218 9.06808 19.0391 9.13776 18.9694L16.1081 12.0001L9.13776 5.03068C8.99703 4.88995 8.91797 4.69907 8.91797 4.50005C8.91797 4.30103 8.99703 4.11016 9.13776 3.96943C9.27849 3.8287 9.46936 3.74963 9.66839 3.74963C9.86741 3.74963 10.0583 3.8287 10.199 3.96943L17.699 11.4694C17.7687 11.5391 17.8241 11.6218 17.8618 11.7128C17.8995 11.8039 17.919 11.9015 17.919 12.0001C17.919 12.0986 17.8995 12.1962 17.8618 12.2873C17.8241 12.3783 17.7687 12.461 17.699 12.5307Z" fill="#0E51A0"/>
                                      </svg>
                                </div>
                            </div>

                            <div class="columnSpec">
                                <span class="sellValue">₹94.5</span>
                                <div class="sellBtn">
                                    <span>Sell USD</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 24" fill="none">
                                        <path d="M17.699 12.5307L10.199 20.0307C10.1293 20.1004 10.0466 20.1556 9.95556 20.1933C9.86451 20.2311 9.76693 20.2505 9.66839 20.2505C9.56984 20.2505 9.47226 20.2311 9.38121 20.1933C9.29017 20.1556 9.20744 20.1004 9.13776 20.0307C9.06808 19.961 9.0128 19.8783 8.97509 19.7872C8.93738 19.6962 8.91797 19.5986 8.91797 19.5001C8.91797 19.4015 8.93738 19.3039 8.97509 19.2129C9.0128 19.1218 9.06808 19.0391 9.13776 18.9694L16.1081 12.0001L9.13776 5.03068C8.99703 4.88995 8.91797 4.69907 8.91797 4.50005C8.91797 4.30103 8.99703 4.11016 9.13776 3.96943C9.27849 3.8287 9.46936 3.74963 9.66839 3.74963C9.86741 3.74963 10.0583 3.8287 10.199 3.96943L17.699 11.4694C17.7687 11.5391 17.8241 11.6218 17.8618 11.7128C17.8995 11.8039 17.919 11.9015 17.919 12.0001C17.919 12.0986 17.8995 12.1962 17.8618 12.2873C17.8241 12.3783 17.7687 12.461 17.699 12.5307Z" fill="#0E51A0"/>
                                      </svg>
                                </div>
                            </div>
                            
                            
                        </div>


                        <div class="tableRow">
                            <div class="currencyDetails columnSpec">
                               <img class="currencyFlag" src="public/images/flags/usa-flag.svg" alt="">
                               <div class="curremcyNameContainer">
                                <p class="currencyShort">USD</p>
                                <span class="currencyFull">United States Dollar</span>
                               </div>
                            </div>

                            <div class="columnSpec">
                                <span class="buyValue">₹94.5</span>
                                <div class="buyBtn">
                                    <span>Buy USD</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 24" fill="none">
                                        <path d="M17.699 12.5307L10.199 20.0307C10.1293 20.1004 10.0466 20.1556 9.95556 20.1933C9.86451 20.2311 9.76693 20.2505 9.66839 20.2505C9.56984 20.2505 9.47226 20.2311 9.38121 20.1933C9.29017 20.1556 9.20744 20.1004 9.13776 20.0307C9.06808 19.961 9.0128 19.8783 8.97509 19.7872C8.93738 19.6962 8.91797 19.5986 8.91797 19.5001C8.91797 19.4015 8.93738 19.3039 8.97509 19.2129C9.0128 19.1218 9.06808 19.0391 9.13776 18.9694L16.1081 12.0001L9.13776 5.03068C8.99703 4.88995 8.91797 4.69907 8.91797 4.50005C8.91797 4.30103 8.99703 4.11016 9.13776 3.96943C9.27849 3.8287 9.46936 3.74963 9.66839 3.74963C9.86741 3.74963 10.0583 3.8287 10.199 3.96943L17.699 11.4694C17.7687 11.5391 17.8241 11.6218 17.8618 11.7128C17.8995 11.8039 17.919 11.9015 17.919 12.0001C17.919 12.0986 17.8995 12.1962 17.8618 12.2873C17.8241 12.3783 17.7687 12.461 17.699 12.5307Z" fill="#0E51A0"/>
                                      </svg>
                                </div>
                            </div>

                            <div class="columnSpec">
                                <span class="sellValue">₹94.5</span>
                                <div class="sellBtn">
                                    <span>Sell USD</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 24" fill="none">
                                        <path d="M17.699 12.5307L10.199 20.0307C10.1293 20.1004 10.0466 20.1556 9.95556 20.1933C9.86451 20.2311 9.76693 20.2505 9.66839 20.2505C9.56984 20.2505 9.47226 20.2311 9.38121 20.1933C9.29017 20.1556 9.20744 20.1004 9.13776 20.0307C9.06808 19.961 9.0128 19.8783 8.97509 19.7872C8.93738 19.6962 8.91797 19.5986 8.91797 19.5001C8.91797 19.4015 8.93738 19.3039 8.97509 19.2129C9.0128 19.1218 9.06808 19.0391 9.13776 18.9694L16.1081 12.0001L9.13776 5.03068C8.99703 4.88995 8.91797 4.69907 8.91797 4.50005C8.91797 4.30103 8.99703 4.11016 9.13776 3.96943C9.27849 3.8287 9.46936 3.74963 9.66839 3.74963C9.86741 3.74963 10.0583 3.8287 10.199 3.96943L17.699 11.4694C17.7687 11.5391 17.8241 11.6218 17.8618 11.7128C17.8995 11.8039 17.919 11.9015 17.919 12.0001C17.919 12.0986 17.8995 12.1962 17.8618 12.2873C17.8241 12.3783 17.7687 12.461 17.699 12.5307Z" fill="#0E51A0"/>
                                      </svg>
                                </div>
                            </div>
                            
                            
                        </div>


                        <div class="tableRow activeTableRow">
                            <div class="currencyDetails columnSpec">
                               <img class="currencyFlag" src="public/images/flags/usa-flag.svg" alt="">
                               <div class="curremcyNameContainer">
                                <p class="currencyShort">USD</p>
                                <span class="currencyFull">United States Dollar</span>
                               </div>
                            </div>

                            <div class="columnSpec">
                                <span class="buyValue">₹94.5</span>
                                <div class="buyBtn">
                                    <span>Buy USD</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 24" fill="none">
                                        <path d="M17.699 12.5307L10.199 20.0307C10.1293 20.1004 10.0466 20.1556 9.95556 20.1933C9.86451 20.2311 9.76693 20.2505 9.66839 20.2505C9.56984 20.2505 9.47226 20.2311 9.38121 20.1933C9.29017 20.1556 9.20744 20.1004 9.13776 20.0307C9.06808 19.961 9.0128 19.8783 8.97509 19.7872C8.93738 19.6962 8.91797 19.5986 8.91797 19.5001C8.91797 19.4015 8.93738 19.3039 8.97509 19.2129C9.0128 19.1218 9.06808 19.0391 9.13776 18.9694L16.1081 12.0001L9.13776 5.03068C8.99703 4.88995 8.91797 4.69907 8.91797 4.50005C8.91797 4.30103 8.99703 4.11016 9.13776 3.96943C9.27849 3.8287 9.46936 3.74963 9.66839 3.74963C9.86741 3.74963 10.0583 3.8287 10.199 3.96943L17.699 11.4694C17.7687 11.5391 17.8241 11.6218 17.8618 11.7128C17.8995 11.8039 17.919 11.9015 17.919 12.0001C17.919 12.0986 17.8995 12.1962 17.8618 12.2873C17.8241 12.3783 17.7687 12.461 17.699 12.5307Z" fill="#0E51A0"/>
                                      </svg>
                                </div>
                            </div>

                            <div class="columnSpec">
                                <span class="sellValue">₹94.5</span>
                                <div class="sellBtn">
                                    <span>Sell USD</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 24" fill="none">
                                        <path d="M17.699 12.5307L10.199 20.0307C10.1293 20.1004 10.0466 20.1556 9.95556 20.1933C9.86451 20.2311 9.76693 20.2505 9.66839 20.2505C9.56984 20.2505 9.47226 20.2311 9.38121 20.1933C9.29017 20.1556 9.20744 20.1004 9.13776 20.0307C9.06808 19.961 9.0128 19.8783 8.97509 19.7872C8.93738 19.6962 8.91797 19.5986 8.91797 19.5001C8.91797 19.4015 8.93738 19.3039 8.97509 19.2129C9.0128 19.1218 9.06808 19.0391 9.13776 18.9694L16.1081 12.0001L9.13776 5.03068C8.99703 4.88995 8.91797 4.69907 8.91797 4.50005C8.91797 4.30103 8.99703 4.11016 9.13776 3.96943C9.27849 3.8287 9.46936 3.74963 9.66839 3.74963C9.86741 3.74963 10.0583 3.8287 10.199 3.96943L17.699 11.4694C17.7687 11.5391 17.8241 11.6218 17.8618 11.7128C17.8995 11.8039 17.919 11.9015 17.919 12.0001C17.919 12.0986 17.8995 12.1962 17.8618 12.2873C17.8241 12.3783 17.7687 12.461 17.699 12.5307Z" fill="#0E51A0"/>
                                      </svg>
                                </div>
                            </div>
                            
                            
                        </div>



                        <div class="tableRow">
                            <div class="currencyDetails columnSpec">
                               <img class="currencyFlag" src="public/images/flags/usa-flag.svg" alt="">
                               <div class="curremcyNameContainer">
                                <p class="currencyShort">USD</p>
                                <span class="currencyFull">United States Dollar</span>
                               </div>
                            </div>

                            <div class="columnSpec">
                                <span class="buyValue">₹94.5</span>
                                <div class="buyBtn">
                                    <span>Buy USD</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 24" fill="none">
                                        <path d="M17.699 12.5307L10.199 20.0307C10.1293 20.1004 10.0466 20.1556 9.95556 20.1933C9.86451 20.2311 9.76693 20.2505 9.66839 20.2505C9.56984 20.2505 9.47226 20.2311 9.38121 20.1933C9.29017 20.1556 9.20744 20.1004 9.13776 20.0307C9.06808 19.961 9.0128 19.8783 8.97509 19.7872C8.93738 19.6962 8.91797 19.5986 8.91797 19.5001C8.91797 19.4015 8.93738 19.3039 8.97509 19.2129C9.0128 19.1218 9.06808 19.0391 9.13776 18.9694L16.1081 12.0001L9.13776 5.03068C8.99703 4.88995 8.91797 4.69907 8.91797 4.50005C8.91797 4.30103 8.99703 4.11016 9.13776 3.96943C9.27849 3.8287 9.46936 3.74963 9.66839 3.74963C9.86741 3.74963 10.0583 3.8287 10.199 3.96943L17.699 11.4694C17.7687 11.5391 17.8241 11.6218 17.8618 11.7128C17.8995 11.8039 17.919 11.9015 17.919 12.0001C17.919 12.0986 17.8995 12.1962 17.8618 12.2873C17.8241 12.3783 17.7687 12.461 17.699 12.5307Z" fill="#0E51A0"/>
                                      </svg>
                                </div>
                            </div>

                            <div class="columnSpec">
                                <span class="sellValue">₹94.5</span>
                                <div class="sellBtn">
                                    <span>Sell USD</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 24" fill="none">
                                        <path d="M17.699 12.5307L10.199 20.0307C10.1293 20.1004 10.0466 20.1556 9.95556 20.1933C9.86451 20.2311 9.76693 20.2505 9.66839 20.2505C9.56984 20.2505 9.47226 20.2311 9.38121 20.1933C9.29017 20.1556 9.20744 20.1004 9.13776 20.0307C9.06808 19.961 9.0128 19.8783 8.97509 19.7872C8.93738 19.6962 8.91797 19.5986 8.91797 19.5001C8.91797 19.4015 8.93738 19.3039 8.97509 19.2129C9.0128 19.1218 9.06808 19.0391 9.13776 18.9694L16.1081 12.0001L9.13776 5.03068C8.99703 4.88995 8.91797 4.69907 8.91797 4.50005C8.91797 4.30103 8.99703 4.11016 9.13776 3.96943C9.27849 3.8287 9.46936 3.74963 9.66839 3.74963C9.86741 3.74963 10.0583 3.8287 10.199 3.96943L17.699 11.4694C17.7687 11.5391 17.8241 11.6218 17.8618 11.7128C17.8995 11.8039 17.919 11.9015 17.919 12.0001C17.919 12.0986 17.8995 12.1962 17.8618 12.2873C17.8241 12.3783 17.7687 12.461 17.699 12.5307Z" fill="#0E51A0"/>
                                      </svg>
                                </div>
                            </div>
                            
                            
                        </div>


                        <div class="tableRow">
                            <div class="currencyDetails columnSpec">
                               <img class="currencyFlag" src="public/images/flags/usa-flag.svg" alt="">
                               <div class="curremcyNameContainer">
                                <p class="currencyShort">USD</p>
                                <span class="currencyFull">United States Dollar</span>
                               </div>
                            </div>

                            <div class="columnSpec">
                                <span class="buyValue">₹94.5</span>
                                <div class="buyBtn">
                                    <span>Buy USD</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 24" fill="none">
                                        <path d="M17.699 12.5307L10.199 20.0307C10.1293 20.1004 10.0466 20.1556 9.95556 20.1933C9.86451 20.2311 9.76693 20.2505 9.66839 20.2505C9.56984 20.2505 9.47226 20.2311 9.38121 20.1933C9.29017 20.1556 9.20744 20.1004 9.13776 20.0307C9.06808 19.961 9.0128 19.8783 8.97509 19.7872C8.93738 19.6962 8.91797 19.5986 8.91797 19.5001C8.91797 19.4015 8.93738 19.3039 8.97509 19.2129C9.0128 19.1218 9.06808 19.0391 9.13776 18.9694L16.1081 12.0001L9.13776 5.03068C8.99703 4.88995 8.91797 4.69907 8.91797 4.50005C8.91797 4.30103 8.99703 4.11016 9.13776 3.96943C9.27849 3.8287 9.46936 3.74963 9.66839 3.74963C9.86741 3.74963 10.0583 3.8287 10.199 3.96943L17.699 11.4694C17.7687 11.5391 17.8241 11.6218 17.8618 11.7128C17.8995 11.8039 17.919 11.9015 17.919 12.0001C17.919 12.0986 17.8995 12.1962 17.8618 12.2873C17.8241 12.3783 17.7687 12.461 17.699 12.5307Z" fill="#0E51A0"/>
                                      </svg>
                                </div>
                            </div>

                            <div class="columnSpec">
                                <span class="sellValue">₹94.5</span>
                                <div class="sellBtn">
                                    <span>Sell USD</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 24" fill="none">
                                        <path d="M17.699 12.5307L10.199 20.0307C10.1293 20.1004 10.0466 20.1556 9.95556 20.1933C9.86451 20.2311 9.76693 20.2505 9.66839 20.2505C9.56984 20.2505 9.47226 20.2311 9.38121 20.1933C9.29017 20.1556 9.20744 20.1004 9.13776 20.0307C9.06808 19.961 9.0128 19.8783 8.97509 19.7872C8.93738 19.6962 8.91797 19.5986 8.91797 19.5001C8.91797 19.4015 8.93738 19.3039 8.97509 19.2129C9.0128 19.1218 9.06808 19.0391 9.13776 18.9694L16.1081 12.0001L9.13776 5.03068C8.99703 4.88995 8.91797 4.69907 8.91797 4.50005C8.91797 4.30103 8.99703 4.11016 9.13776 3.96943C9.27849 3.8287 9.46936 3.74963 9.66839 3.74963C9.86741 3.74963 10.0583 3.8287 10.199 3.96943L17.699 11.4694C17.7687 11.5391 17.8241 11.6218 17.8618 11.7128C17.8995 11.8039 17.919 11.9015 17.919 12.0001C17.919 12.0986 17.8995 12.1962 17.8618 12.2873C17.8241 12.3783 17.7687 12.461 17.699 12.5307Z" fill="#0E51A0"/>
                                      </svg>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="guideLineSection mt-20">
                <div class="flex flex-col gap-2">
                    <h1 class="headingText">
                        Guidelines for Buying and Selling Foreign Currency in India
                    </h1>
                   
                    <ul class="contentList mt-4">
                        <li>Beneficiary Bank Name & Address</li>
                        <li>Beneficiary Name & Address in USA (as given in bank)</li>
                        <li>SWIFT Code & Routing number</li>
                        <li>Beneficiary Account Number</li>
                    </ul>
                </div>
            </div>

            <div class="documentSection mt-12">
                <h1 class="headingText">
                    Documents required for Currency Exchange in India
                </h1>
        
                <div class="grid grid-cols-2 customMd:grid-cols-3 gap-4 mt-4">
                    <!-- Card 1 -->
                    <div class="flex-col justify-start items-start gap-3 inline-flex relative card-with-border">
                      <div class="text-[#0e51a0] text-[32px] font-bold font-['Plus Jakarta Sans'] leading-[48px]">1</div>
                      <div class="self-stretch text-black/60 text-base font-normal font-['Plus Jakarta Sans'] leading-normal">
                        Govt issued photo ID proof of the sender (Passport/Voter’s ID/Aadhar Card)
                      </div>
                    </div>
                    
                  
                    <!-- Card 2 -->
                    <div class="flex-col justify-start items-start gap-3 inline-flex relative card-with-border">
                      <div class="text-[#0e51a0] text-[32px] font-bold font-['Plus Jakarta Sans'] leading-[48px]">2</div>
                      <div class="self-stretch text-black/60 text-base font-normal font-['Plus Jakarta Sans'] leading-normal">
                        PAN card copy of the sender
                      </div>
                    </div>
                  
                    <!-- Card 3 -->
                    <div class="flex-col justify-start items-start gap-3 inline-flex relative card-with-border">
                      <div class="text-[#0e51a0] text-[32px] font-bold font-['Plus Jakarta Sans'] leading-[48px]">3</div>
                      <div class="self-stretch text-black/60 text-base font-normal font-['Plus Jakarta Sans'] leading-normal">
                        Filled A2 Form cum declaration with signed by the sender
                      </div>
                    </div>
                  
                    <!-- Card 4 -->
                    <div class="flex-col justify-start items-start gap-3 inline-flex relative card-with-border">
                      <div class="text-[#0e51a0] text-[32px] font-bold font-['Plus Jakarta Sans'] leading-[48px]">4</div>
                      <div class="self-stretch text-black/60 text-base font-normal font-['Plus Jakarta Sans'] leading-normal">
                        Purpose proof (University letter/Prospectus) stating the amount to be transferred and account details (for tuition fee payments only)
                      </div>
                    </div>
                  
                    <!-- Card 5 -->
                    <div class="flex-col justify-start items-start gap-3 inline-flex relative card-with-border">
                      <div class="text-[#0e51a0] text-[32px] font-bold font-['Plus Jakarta Sans'] leading-[48px]">5</div>
                      <div class="self-stretch text-black/60 text-base font-normal font-['Plus Jakarta Sans'] leading-normal">
                        Beneficiary passport copy (for maintenance of close relative & gift remittance only)
                      </div>
                    </div>
                </div>
            </div>

            <div class="purposeSection mt-12">
                <div class="flex flex-col gap-2">
                    <h1 class="headingText">
                        Allowed Purposes for Buying Forex in India
                    </h1>
                   
                    <ul class="contentList mt-4">
                        <li>Beneficiary Bank Name & Address</li>
                        <li>Beneficiary Name & Address in USA (as given in bank)</li>
                        <li>SWIFT Code & Routing number</li>
                        <li>Beneficiary Account Number</li>
                    </ul>
                </div>
            </div>

            <div class="stepsSection mt-24">
                <h1 class="headingText">
                    Steps for Buying Forex in India through Extravelmoney
                </h1>
                <div class="stepsContainer mt-8">
                    <div class="step">
                        <div class="stepHeader">
                            <span>1</span>
                            <div class="verticalLine">

                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="40" viewBox="0 0 24 41" fill="none">
                                <path d="M0 0.0800781H10.5548L24 20.5H13.4452L0 0.0800781Z" fill="#E31D1C"/>
                                <path d="M0 40.9198H10.5548L24 20.4999H13.4452L0 40.9198Z" fill="#E31D1C"/>
                            </svg>
                            <div class="horizontalLine">

                            </div>
                        </div>

                        <div class="stepBody">
                            <div class="stepContentHeader">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="58" viewBox="0 0 64 58" fill="none">
                                        <path d="M63.1519 1.75H15.6973C7.93187 1.75 1.63672 8.04514 1.63672 15.8106V57.1136" stroke="#0E51A0" stroke-width="2"/>
                                        <path d="M63.1519 1.75H15.6973C7.93187 1.75 1.63672 8.04514 1.63672 15.8106V57.1136" stroke="url(#paint0_linear_1343_25088)" stroke-width="2"/>
                                        <defs>
                                          <linearGradient id="paint0_linear_1343_25088" x1="32.3943" y1="1.75" x2="32.3943" y2="57.1136" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#0E51A0"/>
                                            <stop offset="1" stop-color="#E31D1C"/>
                                          </linearGradient>
                                        </defs>
                                      </svg>
    
                                      <span>Compare Rates</span>
                                </div>
                                
                                  <p>Compare Rates offered by RBI authorized money changers in Bangalore</p>

                            </div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="stepHeader">
                            <span>1</span>
                            <div class="verticalLine">

                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="40" viewBox="0 0 24 41" fill="none">
                                <path d="M0 0.0800781H10.5548L24 20.5H13.4452L0 0.0800781Z" fill="#E31D1C"/>
                                <path d="M0 40.9198H10.5548L24 20.4999H13.4452L0 40.9198Z" fill="#E31D1C"/>
                            </svg>
                            <div class="horizontalLine">

                            </div>
                        </div>

                        <div class="stepBody">
                            <div class="stepContentHeader">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="58" viewBox="0 0 64 58" fill="none">
                                        <path d="M63.1519 1.75H15.6973C7.93187 1.75 1.63672 8.04514 1.63672 15.8106V57.1136" stroke="#0E51A0" stroke-width="2"/>
                                        <path d="M63.1519 1.75H15.6973C7.93187 1.75 1.63672 8.04514 1.63672 15.8106V57.1136" stroke="url(#paint0_linear_1343_25088)" stroke-width="2"/>
                                        <defs>
                                          <linearGradient id="paint0_linear_1343_25088" x1="32.3943" y1="1.75" x2="32.3943" y2="57.1136" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#0E51A0"/>
                                            <stop offset="1" stop-color="#E31D1C"/>
                                          </linearGradient>
                                        </defs>
                                      </svg>
    
                                      <span>Compare Rates</span>
                                </div>
                                
                                  <p>Compare Rates offered by RBI authorized money changers in Bangalore</p>

                            </div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="stepHeader">
                            <span>1</span>
                            <div class="verticalLine">

                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="40" viewBox="0 0 24 41" fill="none">
                                <path d="M0 0.0800781H10.5548L24 20.5H13.4452L0 0.0800781Z" fill="#E31D1C"/>
                                <path d="M0 40.9198H10.5548L24 20.4999H13.4452L0 40.9198Z" fill="#E31D1C"/>
                            </svg>
                            <div class="horizontalLine">

                            </div>
                        </div>

                        <div class="stepBody">
                            <div class="stepContentHeader">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="58" viewBox="0 0 64 58" fill="none">
                                        <path d="M63.1519 1.75H15.6973C7.93187 1.75 1.63672 8.04514 1.63672 15.8106V57.1136" stroke="#0E51A0" stroke-width="2"/>
                                        <path d="M63.1519 1.75H15.6973C7.93187 1.75 1.63672 8.04514 1.63672 15.8106V57.1136" stroke="url(#paint0_linear_1343_25088)" stroke-width="2"/>
                                        <defs>
                                          <linearGradient id="paint0_linear_1343_25088" x1="32.3943" y1="1.75" x2="32.3943" y2="57.1136" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#0E51A0"/>
                                            <stop offset="1" stop-color="#E31D1C"/>
                                          </linearGradient>
                                        </defs>
                                      </svg>
    
                                      <span>Compare Rates</span>
                                </div>
                                
                                  <p>Compare Rates offered by RBI authorized money changers in Bangalore</p>

                            </div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="stepHeader">
                            <span>1</span>
                            <div class="verticalLine">

                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="40" viewBox="0 0 24 41" fill="none">
                                <path d="M0 0.0800781H10.5548L24 20.5H13.4452L0 0.0800781Z" fill="#E31D1C"/>
                                <path d="M0 40.9198H10.5548L24 20.4999H13.4452L0 40.9198Z" fill="#E31D1C"/>
                            </svg>
                            <div class="horizontalLine">

                            </div>
                        </div>

                        <div class="stepBody">
                            <div class="stepContentHeader">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="58" viewBox="0 0 64 58" fill="none">
                                        <path d="M63.1519 1.75H15.6973C7.93187 1.75 1.63672 8.04514 1.63672 15.8106V57.1136" stroke="#0E51A0" stroke-width="2"/>
                                        <path d="M63.1519 1.75H15.6973C7.93187 1.75 1.63672 8.04514 1.63672 15.8106V57.1136" stroke="url(#paint0_linear_1343_25088)" stroke-width="2"/>
                                        <defs>
                                          <linearGradient id="paint0_linear_1343_25088" x1="32.3943" y1="1.75" x2="32.3943" y2="57.1136" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#0E51A0"/>
                                            <stop offset="1" stop-color="#E31D1C"/>
                                          </linearGradient>
                                        </defs>
                                      </svg>
    
                                      <span>Compare Rates</span>
                                </div>
                                
                                  <p>Compare Rates offered by RBI authorized money changers in Bangalore</p>

                            </div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="stepHeader">
                            <span>1</span>
                            <div class="verticalLine">

                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="40" viewBox="0 0 24 41" fill="none">
                                <path d="M0 0.0800781H10.5548L24 20.5H13.4452L0 0.0800781Z" fill="#E31D1C"/>
                                <path d="M0 40.9198H10.5548L24 20.4999H13.4452L0 40.9198Z" fill="#E31D1C"/>
                            </svg>
                            <div class="horizontalLine">

                            </div>
                        </div>

                        <div class="stepBody">
                            <div class="stepContentHeader">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="58" viewBox="0 0 64 58" fill="none">
                                        <path d="M63.1519 1.75H15.6973C7.93187 1.75 1.63672 8.04514 1.63672 15.8106V57.1136" stroke="#0E51A0" stroke-width="2"/>
                                        <path d="M63.1519 1.75H15.6973C7.93187 1.75 1.63672 8.04514 1.63672 15.8106V57.1136" stroke="url(#paint0_linear_1343_25088)" stroke-width="2"/>
                                        <defs>
                                          <linearGradient id="paint0_linear_1343_25088" x1="32.3943" y1="1.75" x2="32.3943" y2="57.1136" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#0E51A0"/>
                                            <stop offset="1" stop-color="#E31D1C"/>
                                          </linearGradient>
                                        </defs>
                                      </svg>
    
                                      <span>Compare Rates</span>
                                </div>
                                
                                  <p>Compare Rates offered by RBI authorized money changers in Bangalore</p>

                            </div>
                        </div>
                    </div>

                    
                </div>

                
            </div>


            <div class="locationSection mt-12">
                <h1 class="headingText">
                    Get Currency Exchange in Bangalore at
                </h1>

                <div class="locationContainer mt-8">
                    <div class="location">
                        
                        <span class="locationName"> Koramangala</span>
                        <svg class="locationBtnArrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z" fill="white"/>
                        </svg>
                    </div>

                    <div class="location">
                        
                        <span class="locationName"> Koramangala</span>
                        <svg class="locationBtnArrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z" fill="white"/>
                        </svg>
                    </div>

                    <div class="location">
                        
                        <span class="locationName"> Koramangala</span>
                        <svg class="locationBtnArrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z" fill="white"/>
                        </svg>
                    </div>

                    <div class="location">
                        
                        <span class="locationName"> Koramangala</span>
                        <svg class="locationBtnArrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z" fill="white"/>
                        </svg>
                    </div>

                    <div class="location">
                        
                        <span class="locationName"> Koramangala</span>
                        <svg class="locationBtnArrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z" fill="white"/>
                        </svg>
                    </div>

                    <div class="location">
                        
                        <span class="locationName"> Koramangala</span>
                        <svg class="locationBtnArrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z" fill="white"/>
                        </svg>
                    </div>

                    <div class="location">
                        
                        <span class="locationName"> Koramangala</span>
                        <svg class="locationBtnArrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z" fill="white"/>
                        </svg>
                    </div>

                    <div class="location">
                        
                        <span class="locationName"> Koramangala</span>
                        <svg class="locationBtnArrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z" fill="white"/>
                        </svg>
                    </div>

                    <div class="location">
                        
                        <span class="locationName"> Koramangala</span>
                        <svg class="locationBtnArrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17.031 12.5307L9.53104 20.0307C9.46136 20.1004 9.37863 20.1556 9.28759 20.1933C9.19654 20.2311 9.09896 20.2505 9.00042 20.2505C8.90187 20.2505 8.80429 20.2311 8.71324 20.1933C8.6222 20.1556 8.53947 20.1004 8.46979 20.0307C8.40011 19.961 8.34483 19.8783 8.30712 19.7872C8.26941 19.6962 8.25 19.5986 8.25 19.5001C8.25 19.4015 8.26941 19.3039 8.30712 19.2129C8.34483 19.1218 8.40011 19.0391 8.46979 18.9694L15.4401 12.0001L8.46979 5.03068C8.32906 4.88995 8.25 4.69907 8.25 4.50005C8.25 4.30103 8.32906 4.11016 8.46979 3.96943C8.61052 3.8287 8.80139 3.74963 9.00042 3.74963C9.19944 3.74963 9.39031 3.8287 9.53104 3.96943L17.031 11.4694C17.1008 11.5391 17.1561 11.6218 17.1938 11.7128C17.2316 11.8039 17.251 11.9015 17.251 12.0001C17.251 12.0986 17.2316 12.1962 17.1938 12.2873C17.1561 12.3783 17.1008 12.461 17.031 12.5307Z" fill="white"/>
                        </svg>
                    </div>

                    
                </div>
            </div>


            <div class="popularCitySection mt-12">
                <h1 class="headingText">
                    Get Currency Exchange in Other Popular Cities
                </h1>

                <div class="popularCityContainer mt-8">
                    <div class="cityCard">
                        <div class="leftSec">
                            <div class="logoContainer">
                                <img class="transparentLogo" src="public/images/logo/transparentLogo.svg" alt="">
                                <img class="colourLogo" src="public/images/logo/colourLogo.svg" alt="">
                            </div>
                            
                            <span class="locName">Chennai</span>
                        </div>
                        <div class="rightSec">
                            <svg class="imgSvg" xmlns="http://www.w3.org/2000/svg" width="70" height="42" viewBox="0 0 70 42" fill="none">
                                <g opacity="0.4">
                                  <path d="M13.6823 0.587852L13.6873 0.590382C14.436 0.721901 15.086 0.878712 15.521 1.0507L20.802 3.10694L24.7273 4.63711L44.8547 12.4852L47.4572 13.4969L56.2993 16.9518L64.026 10.3556L70 12.685L58.3783 28.7708L43.7545 23.4721V23.0902L43.7444 41.3459L37.1634 38.6473L21.9907 10.9829L19.1833 9.41983L21.5557 14.6199L18.1033 13.0872L12.8577 11.036L12.4202 10.864L-0.000732422 5.92953C-0.000732422 5.92953 5.82655 -2.21703 13.6823 0.587852Z" fill="#FF0000" fill-opacity="0.2"/>
                                </g>
                              </svg>
                        </div>
                        <div class="viewBtn">
                            <span>View Locations</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M11.354 8.35378L6.35403 13.3538C6.30757 13.4002 6.25242 13.4371 6.19173 13.4622C6.13103 13.4874 6.06598 13.5003 6.00028 13.5003C5.93458 13.5003 5.86953 13.4874 5.80883 13.4622C5.74813 13.4371 5.69298 13.4002 5.64653 13.3538C5.60007 13.3073 5.56322 13.2522 5.53808 13.1915C5.51294 13.1308 5.5 13.0657 5.5 13C5.5 12.9343 5.51294 12.8693 5.53808 12.8086C5.56322 12.7479 5.60007 12.6927 5.64653 12.6463L10.2934 8.00003L5.64653 3.35378C5.55271 3.25996 5.5 3.13272 5.5 3.00003C5.5 2.86735 5.55271 2.7401 5.64653 2.64628C5.74035 2.55246 5.8676 2.49976 6.00028 2.49976C6.13296 2.49976 6.26021 2.55246 6.35403 2.64628L11.354 7.64628C11.4005 7.69272 11.4374 7.74786 11.4626 7.80856C11.4877 7.86926 11.5007 7.93433 11.5007 8.00003C11.5007 8.06574 11.4877 8.13081 11.4626 8.1915C11.4374 8.2522 11.4005 8.30735 11.354 8.35378Z" fill="#0E51A0"/>
                            </svg>
                        </div>
                        

                    </div>

                    <div class="cityCard">
                        <div class="leftSec">
                            <div class="logoContainer">
                                <img class="transparentLogo" src="public/images/logo/transparentLogo.svg" alt="">
                                <img class="colourLogo" src="public/images/logo/colourLogo.svg" alt="">
                            </div>
                            
                            <span class="locName">Chennai</span>
                        </div>
                        <div class="rightSec">
                            <svg class="imgSvg" xmlns="http://www.w3.org/2000/svg" width="70" height="42" viewBox="0 0 70 42" fill="none">
                                <g opacity="0.4">
                                  <path d="M13.6823 0.587852L13.6873 0.590382C14.436 0.721901 15.086 0.878712 15.521 1.0507L20.802 3.10694L24.7273 4.63711L44.8547 12.4852L47.4572 13.4969L56.2993 16.9518L64.026 10.3556L70 12.685L58.3783 28.7708L43.7545 23.4721V23.0902L43.7444 41.3459L37.1634 38.6473L21.9907 10.9829L19.1833 9.41983L21.5557 14.6199L18.1033 13.0872L12.8577 11.036L12.4202 10.864L-0.000732422 5.92953C-0.000732422 5.92953 5.82655 -2.21703 13.6823 0.587852Z" fill="#FF0000" fill-opacity="0.2"/>
                                </g>
                              </svg>
                        </div>
                        <div class="viewBtn">
                            <span>View Locations</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M11.354 8.35378L6.35403 13.3538C6.30757 13.4002 6.25242 13.4371 6.19173 13.4622C6.13103 13.4874 6.06598 13.5003 6.00028 13.5003C5.93458 13.5003 5.86953 13.4874 5.80883 13.4622C5.74813 13.4371 5.69298 13.4002 5.64653 13.3538C5.60007 13.3073 5.56322 13.2522 5.53808 13.1915C5.51294 13.1308 5.5 13.0657 5.5 13C5.5 12.9343 5.51294 12.8693 5.53808 12.8086C5.56322 12.7479 5.60007 12.6927 5.64653 12.6463L10.2934 8.00003L5.64653 3.35378C5.55271 3.25996 5.5 3.13272 5.5 3.00003C5.5 2.86735 5.55271 2.7401 5.64653 2.64628C5.74035 2.55246 5.8676 2.49976 6.00028 2.49976C6.13296 2.49976 6.26021 2.55246 6.35403 2.64628L11.354 7.64628C11.4005 7.69272 11.4374 7.74786 11.4626 7.80856C11.4877 7.86926 11.5007 7.93433 11.5007 8.00003C11.5007 8.06574 11.4877 8.13081 11.4626 8.1915C11.4374 8.2522 11.4005 8.30735 11.354 8.35378Z" fill="#0E51A0"/>
                            </svg>
                        </div>
                        

                    </div>

                    <div class="cityCard">
                        <div class="leftSec">
                            <div class="logoContainer">
                                <img class="transparentLogo" src="public/images/logo/transparentLogo.svg" alt="">
                                <img class="colourLogo" src="public/images/logo/colourLogo.svg" alt="">
                            </div>
                            
                            <span class="locName">Chennai</span>
                        </div>
                        <div class="rightSec">
                            <svg class="imgSvg" xmlns="http://www.w3.org/2000/svg" width="70" height="42" viewBox="0 0 70 42" fill="none">
                                <g opacity="0.4">
                                  <path d="M13.6823 0.587852L13.6873 0.590382C14.436 0.721901 15.086 0.878712 15.521 1.0507L20.802 3.10694L24.7273 4.63711L44.8547 12.4852L47.4572 13.4969L56.2993 16.9518L64.026 10.3556L70 12.685L58.3783 28.7708L43.7545 23.4721V23.0902L43.7444 41.3459L37.1634 38.6473L21.9907 10.9829L19.1833 9.41983L21.5557 14.6199L18.1033 13.0872L12.8577 11.036L12.4202 10.864L-0.000732422 5.92953C-0.000732422 5.92953 5.82655 -2.21703 13.6823 0.587852Z" fill="#FF0000" fill-opacity="0.2"/>
                                </g>
                              </svg>
                        </div>
                        <div class="viewBtn">
                            <span>View Locations</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M11.354 8.35378L6.35403 13.3538C6.30757 13.4002 6.25242 13.4371 6.19173 13.4622C6.13103 13.4874 6.06598 13.5003 6.00028 13.5003C5.93458 13.5003 5.86953 13.4874 5.80883 13.4622C5.74813 13.4371 5.69298 13.4002 5.64653 13.3538C5.60007 13.3073 5.56322 13.2522 5.53808 13.1915C5.51294 13.1308 5.5 13.0657 5.5 13C5.5 12.9343 5.51294 12.8693 5.53808 12.8086C5.56322 12.7479 5.60007 12.6927 5.64653 12.6463L10.2934 8.00003L5.64653 3.35378C5.55271 3.25996 5.5 3.13272 5.5 3.00003C5.5 2.86735 5.55271 2.7401 5.64653 2.64628C5.74035 2.55246 5.8676 2.49976 6.00028 2.49976C6.13296 2.49976 6.26021 2.55246 6.35403 2.64628L11.354 7.64628C11.4005 7.69272 11.4374 7.74786 11.4626 7.80856C11.4877 7.86926 11.5007 7.93433 11.5007 8.00003C11.5007 8.06574 11.4877 8.13081 11.4626 8.1915C11.4374 8.2522 11.4005 8.30735 11.354 8.35378Z" fill="#0E51A0"/>
                            </svg>
                        </div>
                        

                    </div>

                    <div class="cityCard">
                        <div class="leftSec">
                            <div class="logoContainer">
                                <img class="transparentLogo" src="public/images/logo/transparentLogo.svg" alt="">
                                <img class="colourLogo" src="public/images/logo/colourLogo.svg" alt="">
                            </div>
                            
                            <span class="locName">Chennai</span>
                        </div>
                        <div class="rightSec">
                            <svg class="imgSvg" xmlns="http://www.w3.org/2000/svg" width="70" height="42" viewBox="0 0 70 42" fill="none">
                                <g opacity="0.4">
                                  <path d="M13.6823 0.587852L13.6873 0.590382C14.436 0.721901 15.086 0.878712 15.521 1.0507L20.802 3.10694L24.7273 4.63711L44.8547 12.4852L47.4572 13.4969L56.2993 16.9518L64.026 10.3556L70 12.685L58.3783 28.7708L43.7545 23.4721V23.0902L43.7444 41.3459L37.1634 38.6473L21.9907 10.9829L19.1833 9.41983L21.5557 14.6199L18.1033 13.0872L12.8577 11.036L12.4202 10.864L-0.000732422 5.92953C-0.000732422 5.92953 5.82655 -2.21703 13.6823 0.587852Z" fill="#FF0000" fill-opacity="0.2"/>
                                </g>
                              </svg>
                        </div>
                        <div class="viewBtn">
                            <span>View Locations</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M11.354 8.35378L6.35403 13.3538C6.30757 13.4002 6.25242 13.4371 6.19173 13.4622C6.13103 13.4874 6.06598 13.5003 6.00028 13.5003C5.93458 13.5003 5.86953 13.4874 5.80883 13.4622C5.74813 13.4371 5.69298 13.4002 5.64653 13.3538C5.60007 13.3073 5.56322 13.2522 5.53808 13.1915C5.51294 13.1308 5.5 13.0657 5.5 13C5.5 12.9343 5.51294 12.8693 5.53808 12.8086C5.56322 12.7479 5.60007 12.6927 5.64653 12.6463L10.2934 8.00003L5.64653 3.35378C5.55271 3.25996 5.5 3.13272 5.5 3.00003C5.5 2.86735 5.55271 2.7401 5.64653 2.64628C5.74035 2.55246 5.8676 2.49976 6.00028 2.49976C6.13296 2.49976 6.26021 2.55246 6.35403 2.64628L11.354 7.64628C11.4005 7.69272 11.4374 7.74786 11.4626 7.80856C11.4877 7.86926 11.5007 7.93433 11.5007 8.00003C11.5007 8.06574 11.4877 8.13081 11.4626 8.1915C11.4374 8.2522 11.4005 8.30735 11.354 8.35378Z" fill="#0E51A0"/>
                            </svg>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
</section>
</div>
</body>


<?php 
    include $fold . 'includes/footer.php';
?>

</html>