<?php
namespace MVC\Views;

class MarkdownView extends ViewFactory
{
    const LAYOUT = <<<MD
      # {{{title}}}
      {{{listItems}}}
MD;
    protected $replacements;

    public function __construct(object $decorator)
    {
        $this->replacements = [
            '{{{title}}}' => $decorator->title(),
            '{{{items}}}' => $decorator->listItems()
        ];
    }

    public function render() : string
    {
        return str_replace(
                   array_keys($this->replacements),
                   array_values($this->replacements),
                   self::LAYOUT);
    }
}