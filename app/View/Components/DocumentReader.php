<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DocumentReader extends Component
{
    public $doc;
    public $url;
    public $mimeType;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($doc)
    {
        $this->doc = public_path($doc);
        $this->url = url($doc);
        $this->mimeType = mime_content_type($this->doc);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.document-reader');
    }
}
