<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;

class Books extends Component
{
    public $title, $description;
    public $updateMode = false;


    /**
     * Rendering the blade component.
     * 
     * Get datas from book model.
     */
    public function render() {
        $this->books = Book::all();
        return view('livewire.books');
    }

    /**
     * Store the datas to table.
     * 
     * Once datas stored call $this->resetInputFields()
     */
    public function store(){
        $validate = $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
  
        Book::create($validate);
  
        session()->flash('message', 'Book Created Successfully.');
  
        $this->resetInputFields();
    }

    /**
     * Edit the datas that are stored.
     *
     * @param $id
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $this->bookId = $id;
        $this->title = $book->title;
        $this->description = $book->description;
  
        $this->updateMode = true;
    }

      /**
     * Function while cancelling the update.
     *
     * Call $this->resetInputFields()
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    /**
     * Update the data that is already stored.
     *
     * Call $this->resetInputFields()
     */
    public function update()
    {
        $validate = $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
  
        $book = Book::find($this->bookId);
        $book->update([
            'title' => $this->title,
            'description' => $this->description,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Book Updated Successfully.');
        $this->resetInputFields();
    }

    /**
     * Delete the record from table.
     *
     * @param $id
     */
    public function delete($id)
    {
        Book::find($id)->delete();
        session()->flash('message', 'Book Deleted Successfully.');
    }

    /**
     * Reset the input field.
     * 
     * Once the datas are fetched from the field.
     */
    public function resetInputFields() {
        $this->title = '';
        $this->description = '';
    }
}
