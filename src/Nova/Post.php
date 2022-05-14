<?php

namespace MennoTempelaar\NovaNewsTool\Nova;

use Laravel\Nova\Panel;
use MennoTempelaar\NovaNewsTool\Models\Post as PostModel;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource;


class Post extends Resource
{

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = PostModel::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'title',
        'contents',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     *
     * @return array
     */
    public function fields ( NovaRequest $request ): array
    {

        return [

            Panel::make(__('nova-news-tool::system_data.title'), [
                ID::make()->sortable(),
            ]),

        ];

    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     *
     * @return array
     */
    public function cards ( NovaRequest $request ): array
    {

        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     *
     * @return array
     */
    public function filters ( NovaRequest $request ): array
    {

        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     *
     * @return array
     */
    public function lenses ( NovaRequest $request ): array
    {

        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     *
     * @return array
     */
    public function actions ( NovaRequest $request ): array
    {

        return [];
    }

}
