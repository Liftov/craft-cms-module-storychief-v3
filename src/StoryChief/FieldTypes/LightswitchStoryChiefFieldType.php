<?php namespace storychief\storychiefv3\storychief\FieldTypes;

class LightswitchStoryChiefFieldType implements StoryChiefFieldTypeInterface
{
    public function supportedStorychiefFieldTypes()
    {
        return [
            'select',
            'radio',
            'checkbox'
        ];
    }

    public function prepFieldData(FieldModel $field, $fieldData)
    {
        $preppedData = StoryChiefHelper::parseBoolean($fieldData);
        return $preppedData;
    }
}
