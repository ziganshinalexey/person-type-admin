<?php

declare(strict_types = 1);

namespace Ziganshinalexey\PersonTypeAdmin\forms\personType;

use Userstory\Yii2Forms\forms\AbstractDeleteForm;
use yii\base\InvalidConfigException;
use Ziganshinalexey\PersonType\entities\PersonTypeActiveRecord;
use Ziganshinalexey\PersonType\traits\personType\PersonTypeComponentTrait;
use Ziganshinalexey\PersonType\validators\personType\PersonTypeValidator;

/**
 * Класс формы для удаления сущности "Тип личности".
 */
class DeleteForm extends AbstractDeleteForm
{
    use PersonTypeComponentTrait;

    /**
     * Инициализация объекта формы обновления.
     *
     * @throws InvalidConfigException Если компонент не зарегистрирован.
     *
     * @return void
     */
    public function init(): void
    {
        parent::init();
        $this->setDtoComponent($this->getPersonTypeComponent());
        $this->setActiveRecordClass(PersonTypeActiveRecord::class);
    }

    /**
     * Данный метод возвращает массив, содержащий правила валидации атрибутов.
     *
     * @return array
     */
    public function rules(): array
    {
        return PersonTypeValidator::getRules();
    }
}