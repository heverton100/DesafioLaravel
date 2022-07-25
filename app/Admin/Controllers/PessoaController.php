<?php

namespace App\Admin\Controllers;

use App\Models\Pessoa;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class PessoaController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header(trans('admin.index'))
            ->description(trans('admin.description'))
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header(trans('admin.detail'))
            ->description(trans('admin.description'))
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header(trans('admin.edit'))
            ->description(trans('admin.description'))
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header(trans('admin.create'))
            ->description(trans('admin.description'))
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Pessoa);

        $grid->id('ID');
        $grid->nome('nome');
        $grid->razao_social('razao_social');
        $grid->email('email');
        $grid->cidade('cidade');
        $grid->uf('uf');
        $grid->cep('cep');
        $grid->endereco('endereco');
        $grid->bairro('bairro');
        $grid->numero('numero');
        $grid->complemento('complemento');
        $grid->cpf_cnpj('cpf_cnpj');
        $grid->ddd('ddd');
        $grid->fone('fone');
        $grid->data_cadastro('data_cadastro');
        $grid->created_at(trans('admin.created_at'));
        $grid->updated_at(trans('admin.updated_at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Pessoa::findOrFail($id));

        $show->id('ID');
        $show->nome('nome');
        $show->razao_social('razao_social');
        $show->email('email');
        $show->cidade('cidade');
        $show->uf('uf');
        $show->cep('cep');
        $show->endereco('endereco');
        $show->bairro('bairro');
        $show->numero('numero');
        $show->complemento('complemento');
        $show->cpf_cnpj('cpf_cnpj');
        $show->ddd('ddd');
        $show->fone('fone');
        $show->data_cadastro('data_cadastro');
        $show->created_at(trans('admin.created_at'));
        $show->updated_at(trans('admin.updated_at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Pessoa);

        $form->display('ID');
        $form->text('nome', 'nome');
        $form->text('razao_social', 'razao_social');
        $form->text('email', 'email');
        $form->text('cidade', 'cidade');
        $form->text('uf', 'uf');
        $form->text('cep', 'cep');
        $form->text('endereco', 'endereco');
        $form->text('bairro', 'bairro');
        $form->text('numero', 'numero');
        $form->text('complemento', 'complemento');
        $form->text('cpf_cnpj', 'cpf_cnpj');
        $form->text('ddd', 'ddd');
        $form->text('fone', 'fone');
        $form->text('data_cadastro', 'data_cadastro');
        $form->display(trans('admin.created_at'));
        $form->display(trans('admin.updated_at'));

        return $form;
    }
}
