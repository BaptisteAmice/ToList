## setup node et tailwind ?????
node -v # check if node is installed
npm -v # check if npm is installed
npm install
npm run watch
npm install -D tailwindcss
npx tailwindcss init 

npm run dev #compilation js et css


## controller
php artisan make:controller TrucController


## model + migration file
php artisan make:model Truc -m


## migration 

### php artisan migrate #creation 
### php artisan migrate:reset #suppression
### php artisan migrate:refresh #creation + suppression
### php artisan migrate --path=/database/migrations/truc



# factory 
## php artisan make:factory TrucFactory --model=Truc
cf github faker pour les types de données

'name' => $this->faker->name(),  # generate a random name
'email' => $this->faker->unique()->safeEmail(), # generate a random email

## php artisan tinker
## Item::factory()->count(10)->create();


## console.log() (die and dump)
dd($truc);
