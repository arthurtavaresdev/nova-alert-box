<?php

namespace ArthurTavaresDev\NovaAlertBox;

use Laravel\Nova\ResourceTool;

final class AlertBox extends ResourceTool
{
    public const STATUS_SUCCESS = 'success';
    public const STATUS_WARNING = 'warning';
    public const STATUS_DANGER  = 'danger';

    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Alert Box';
    }

    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'alert-box';
    }

    /**
     * @return $this
     */
    public function title(string $title): self
    {
        return $this->withMeta(['title' => $title]);
    }

    /**
     * @return $this
     */
    public function message(string $message): self
    {
        return $this->withMeta(['message' => $message]);
    }

    /**
     * @return $this
     */
    public function status(string $status): self
    {
        return $this->withMeta(['status' => $status]);
    }
}
