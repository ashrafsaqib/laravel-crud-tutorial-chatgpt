# Laravel 10 Basic Application Made with Help Of ChatGpt
I asked Chatgpt the following 
`"Tell me fastest way to create crud in laravel for just one object Contact using artisan commands options like -m "`

I am writing Here the Steps ChatGPT replied after some Modificaiton So its Perfect for Basic App.

### Step 1: Create the Model
Use the make:model command with the -m option to generate a model class and a migration file for the object. 

I used This Command 

`php artisan make:model Contact -m`

This command will Create Model and Migration Files Both. 
The migration file can be found in database/migrations/ and filename will be similar to this _create_contacts_table.php

### Step 2: Define the Table Structure
Open the migration file created in the previous step, located in the database/migrations directory. Inside the up method, define the table structure using the available column types and options. For example, if your object has a name and description, the migration file may look like this:
We are adding two new columns : 1. Name , 2 : Description 

So Update the below function with these new column definations 

```
public function up()
{
    Schema::create('objects', function (Blueprint $table) {
        $table->id();
        // new columns 
        $table->string('name');
        $table->text('description');
        $table->timestamps();
    });
}
```
   
### Step 3: Run the Migration
Use the migrate command to run the migration and create the table in the database:

Command : 
`php artisan migrate`

### Step 4: Create the Controller
Generate a controller using the make:controller command. 

`php artisan make:controller ContactController -m --model=Contact -r`

The -r option generates a controller with CRUD methods, and the --mo option specifies the model class to be used by the controller.

This will create Controller with pre-defined functions to handle CRUD Operations 

### Step 5: Define Routes
In the routes/web.php file, define the routes for the Above Controller that contains CRUD operations functions.

```
use App\Http\Controllers\ContactController;
Route::resource('contacts', ContactController::class);
```

### Step 6. 
I asked Chatgpt to provide a layout file for my laravel crud based on bootstrap 5 

It provided me with Layout file that I saved in resources views directory

My Prompts for generating view files 
`1. Give me views files for the above crud in bootstrap 5 and using above layout file.` 
( Chatgpt Answered me with view files but there were two issues a. I wanted to use same create and edit form file , b. it didn't provide show contact file  )
2. Use same file for create and edit ( Chatgpt modified the create file and provided me with view file that can be used for both create / edit form view ) 
3. A file to display a Contact ( Upon this prompt, chatgpt provided me the show contact view file ) 

The I asked Chatgpt to Modify the Controller Code to handle CRUD Operations using this prompt
`" update the controller file with related function so that crud operations work and use the above views "`

It successfully Modified the controller and provided me with code that was pretty fine except a few changes I had to make.

You can See All the Prompts here At OpenAI link https://chat.openai.com/share/2d4b7065-1890-40d1-9557-c0a2dddc290e
