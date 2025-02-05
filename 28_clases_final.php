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
        readonly protected string $apiKey   // readonly se usa para definir atributos de solo lectura, estos solo se pueden asignar en el constructor, mas no modificar después de la creación del objeto
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

final class StripePaymentProcessor extends OnlinePaymentProcessor // La palabra reservada final se usa para evitar que una clase sea heredada
{
    final public function validateApiKey(): bool    // La palabra reservada final se usa para evitar que un método sea sobrescrito por una clase hija
    {
        return strpos($this->apiKey, "sk_") === 0;
    }

    public function executeRefund(float|int $amount): bool  // Se puede tipar un parámetro con varios tipos de datos, en este cas $amount puede ser un float o un int
    {
        echo "Procesando reembolso por $" . $amount . " a través de Stripe\n";
        return true;
    }

    public function executePayment(float|int $amount): bool
    {
        echo "Procesando pago por $" . $amount . " a través de Stripe\n";
        return true;
    }
}

final class PaypalPaymentProcessor extends OnlinePaymentProcessor
{
    final public function validateApiKey(): bool
    {
        return strpos($this->apiKey, "pa_") === 0;
    }

    public function executeRefund(float|int $amount): bool
    {
        echo "Procesando reembolso por $" . $amount . " a través de Paypal\n";
        return true;
    }

    public function executePayment(float|int $amount): bool
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

    public function processOrder(float|int $amount, string|array $items): bool
    {
        is_array($items) ? 
        $listItems = implode(", ", $items) :
        $listItems = $items;

        echo "Procesando orden de {$listItems}\n";

        return $this->paymentProcessor->processPayment($amount);
    }

    public function refundOrder(float|int $amount, string|array $items): bool
    {
        is_array($items) ? 
        $listItems = implode(", ", $items) :
        $listItems = $items;

        echo "Procesando orden de {$listItems}\n";

        return $this->paymentProcessor->processRefund($amount);
    }
}

// Es bueno usar interfaces para definir contratos que deben cumplir las clases, esto permite que las clases sean intercambiables
// Ayudando también a la hora de hacer pruebas unitarias ya que se pueden usar mocks para simular el comportamiento de las clases

$stripeProcessor = new StripePaymentProcessor("sk_123456");
// $stripeProcessor->processPayment(100); 

$paypalProcessor = new PaypalPaymentProcessor("pa_123456");
// $paypalProcessor->processPayment(100);

$stripeOrder = new OrderProcessor($stripeProcessor);
$paypalOrder = new OrderProcessor($paypalProcessor);

$stripeOrder->processOrder(100.00, "Libros");
$stripeOrder->refundOrder(50, ["Libros", "Lapiceros"]);	
// $paypalOrder->processOrder(100);
// $paypalOrder->refundOrder(50);  