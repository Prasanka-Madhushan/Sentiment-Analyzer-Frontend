<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Payment Services</title>
        
        <!-- style sheet link -->
        <link href="Payment.css" rel="stylesheet" type="text/css">
        
    </head>
    
    <body>
        <div class="container">
            <form action="PaymentServices" method="POST">
                
                <div class="row"> 
                    <div class="column">
                        <h2 class="heading">Pay Here!</h2>
                        
                        <div class="inptbox" id="paypal-button-container">
                            
                            
                        </div>
                    </div>
                          
                </div>
                
                
                
            </form>
        </div>
    </body>

    <!--JS Link-->
    <script type="text/javascript" src="https://www.paypal.com/sdk/js?client-id=AZky38lkPXFq7iyG46QPt9Z0iyOCVqQfRBWWaprw5NaCEFNagByc8K1OTP73fb6p2Lx57YYs3agrkEEg"></script>
    <script>
    paypal.Buttons({
      createOrder: (data, actions) => {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '10.50' 
            }
          }]
        });
      },
      onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
          const transaction = orderData.purchase_units[0].payments.captures[0];
          alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
        });
      }
    }).render('#paypal-button-container');
  </script>
</html>
