<?php

namespace Notifium\Utilities\Commands;

use Illuminate\Console\Command;

use function Laravel\Prompts\search;
use function Laravel\Prompts\select;
use function Laravel\Prompts\text;

class UtilitiesCommand extends Command {
    public $signature = 'base:clone';

    public $description = 'Clone base and current page';

    public function handle(): int {

        //$cmd = "rsync -a --progress --exclude storage --exclude vendor --exclude node_modules /home/andrewpnlp/dev/filament-base/ /home/andrewpnlp/sites/wpogimages ";
        //system($cmd);

        $name = text(
            label: 'What is your name?',
            placeholder: 'E.g. Taylor Otwell',
            default: "Fred",
            hint: 'This will be displayed on your profile.',
            required: true
        );

        $role = select(
            'What role should the user have?',
            ['Member', 'Contributor', 'Owner'],
        );
        $this->comment('All done, ' . $name . '!');


        $id = search(
            'Search for the user that should receive the mail',
            fn (string $value) => strlen($value) > 0
                ? \App\Models\User::where('name', 'like', "%{$value}%")->pluck('name', 'id')->all()
                : []
        );
        return self::SUCCESS;
    }
}
