<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //Encapsulation
    class BankAccount{
        private $balance;

        public function setBalance($amount){
            if ($amount>0){
                $this->balance = $amount;
            }

        }
        public function getBalance(){
            return $this->balance;
                }

    }
    

    $account = new BankAccount();
    $account->setBalance(20000);
    echo "Account Balance (IN Rs):".$account->getBalance();
    
    ?>
</body>
</html>