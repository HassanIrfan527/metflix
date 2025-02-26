<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Console\Command\Command as CommandS;

class MakePaymentGateway extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'payment:make {name}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new payment gateway class';


    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $namespace = 'App\\Payments';
        $directory = app_path('Payments');
        $filepath = "{$directory}/{$name}.php";

        // Ensure the directory exists
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        // Check if the file already exists
        if (file_exists($filepath)) {
            $this->error("The file {$filepath} already exists!");
            return CommandS::FAILURE;
        }

        // Define the class template
        $template = <<<EOT
    <?php

    namespace {$namespace};

    use App\Contracts\PaymentGatewayInterface;

    class {$name} implements PaymentGatewayInterface
    {
        public function processPayment(float \$amount): array
        {
            // Implement {$name} payment processing logic here
            return [];
        }
    }
    EOT;

        // Create the file
        file_put_contents($filepath, $template);

        $this->info("Payment gateway class {$name} created successfully at {$filepath}.");

        return CommandS::SUCCESS;
    }

}
