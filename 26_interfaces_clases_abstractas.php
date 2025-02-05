<?php

// Las interfaces son un contrato que garantiza que una clase implementará ciertos métodos, por si solas no implementan nada

interface PaymentProcessor // Una clase puede implementar varias interfaces, mientras que solo puede heredar de una clase abstracta
{
    public function processPayment(float $amount): bool;
    public function processRefund(float $amount): bool;
}

abstract class OnlinePaymentProcessor implements PaymentProcessor // Las clases abstractas no se pueden instanciar, se usan para definir métodos que deben ser implementados por las clases hijas
{
    public function __construct(
        protected string $apiKey
    ) {}

    abstract public function validateApiKey(): bool;
    abstract public function executeRefund(float $amount): bool;
    abstract public function executePayment(int $amount): bool;

    public function processRefund(float $amount): bool
    {
        if (!$this->validateApiKey())
        {
            throw new Exception("Invalid API Key");
        }
        return $this->executeRefund($amount);
    }

    public function processPayment(float $amount): bool
    {
        if (!$this->validateApiKey())
        {
            throw new Exception("Invalid API Key");
        }
        return $this->executePayment($amount);
    }
}

class StripePaymentProcessor extends OnlinePaymentProcessor
{
    public function validateApiKey(): bool
    {
        return strpos($this->apiKey, "sk_") === 0;
    }

    public function executeRefund(float $amount): bool
    {
        echo "Procesando reembolso por $" . $amount . " a través de Stripe\n";
        return true;
    }

    public function executePayment(int $amount): bool
    {
        echo "Procesando pago por $" . $amount . " a través de Stripe\n";
        return true;
    }
}

class PaypalPaymentProcessor extends OnlinePaymentProcessor
{
    public function validateApiKey(): bool
    {
        return strpos($this->apiKey, "pa_") === 0;
    }

    public function executeRefund(float $amount): bool
    {
        echo "Procesando reembolso por $" . $amount . " a través de Paypal\n";
        return true;
    }

    public function executePayment(int $amount): bool
    {
        echo "Procesando pago por $" . $amount . " a través de Paypal\n";
        return true;
    }
}

class OrderProcessor 
{
    public function __construct(
        private PaymentProcessor $paymentProcessor  // Se puede tipar una propiedad con una interfaz, esto garantiza que la propiedad será una instancia de una clase que implementa la interfaz
    ) 
    {}

    public function processOrder(float $amount): bool
    {
        return $this->paymentProcessor->processPayment($amount);
    }

    public function refundOrder(float $amount): bool
    {
        return $this->paymentProcessor->processRefund($amount);
    }
}

// Es bueno usar interfaces para definir contratos que deben cumplir las clases, esto permite que las clases sean intercambiables
// Ayudando también a la hora de hacer pruebas unitarias ya que se pueden usar mocks para simular el comportamiento de las clases

$stripeProcessor = new StripePaymentProcessor("sk_123456");
$stripeProcessor->processPayment(100); 

$paypalProcessor = new PaypalPaymentProcessor("pa_123456");
$paypalProcessor->processPayment(100);

$stripeOrder = new OrderProcessor($stripeProcessor);
$paypalOrder = new OrderProcessor($paypalProcessor);

$stripeOrder->processOrder(100);
$stripeOrder->refundOrder(50);
$paypalOrder->processOrder(100);
$paypalOrder->refundOrder(50);