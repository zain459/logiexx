<?php

namespace Logixs\Modules\Site\Enrollment\Models;

use InvalidArgumentException;

class CountryTelephoneCode
{
    /**@var int * */
    private $id;
    /**@var string * */
    private $code;

    private function __construct(int $id, string $code)
    {
        $this->id = $id;
        $this->code = $code;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function code(): string
    {
        return $this->code;
    }

    public static function formId(int $id): self
    {
        $items = self::all();
        foreach ($items as $item) {
            if ($item->id() == $id) {
                return $item;
            }
        }
        throw new InvalidArgumentException(sprintf('invalid telephone code value: %d', $id));
    }

    public static function all(): array
    {
        return [
            new self(1, '(' . 'Afg' . ')' . '+93'),
            new self(2, '(' . 'Alb' . ')' . '+355'),
            new self(3, '(' . 'Alg' . ')' . '+213'),
            new self(4, '('.'American-Samoa' . ')' . '+1-684'),
            new self(5, '(' . 'Andorra' . ')' . '+376'),
            new self(6, '(' . 'Angola' . ')' . '+244'),
            new self(7, '(' . 'Anguilla' . ')' . '+1-264'),
            new self(8, '(' . 'Antarctica' . ')' . '+672'),
            new self(9, '(' . 'Antigua and Barbuda' . ')' . '+1-268'),
            new self(10, '(' . 'Argentina' . ')' . '+54'),
            new self(11, '(' . 'Armenia' . ')' . '+374'),
            new self(12, '(' . 'Aruba' . ')' . '+297'),
            new self(13, '(' . 'Australia' . ')' . '+61'),
            new self(14, '(' . 'Austria' . ')' . '+43'),
            new self(15, '(' . 'Azerbaijan' . ')' . '+994'),
            new self(16, '(' . 'Bahamas' . ')' . '+1-242'),
            new self(17, '(' . 'Bahrain' . ')' . '+973'),
            new self(18, '(' . 'Bangladesh' . ')' . '+880'),
            new self(19, '(' . 'Barbados' . ')' . '+1-246'),
            new self(20, '(' . 'Belarus' . ')' . '+375'),
            new self(21, '(' . 'Belgium' . ')' . '+32'),
            new self(22, '(' . 'Belize' . ')' . '+501'),
            new self(23, '(' . 'Benin' . ')' . '+229'),
            new self(24, '(' . 'Bermuda' . ')' . '+1-441'),
            new self(25, '(' . 'Bhutan' . ')' . '+975'),
            new self(26, '(' . 'Bolivia' . ')' . '+591'),
            new self(27, '(' . 'Bosnia and Herzegovina' . ')' . '+387'),
            new self(28, '(' . 'Botswana' . ')' . '+267'),
            new self(29, '(' . 'Brazil' . ')' . '+55'),
            new self(30, '(' . 'British Indian Ocean Territory' . ')' . '+246'),
            new self(31, '(' . 'British Virgin Islands' . ')' . '+1-284'),
            new self(32, '(' . 'Brunei' . ')' . '+673'),
            new self(33, '(' . 'Bulgaria' . ')' . '+359'),
            new self(34, '(' . 'Burkina Faso' . ')' . '+226'),
            new self(35, '(' . 'Burundi' . ')' . '+257'),
            new self(36, '(' . 'Cambodia' . ')' . '+855'),
            new self(37, '(' . 'Cameroon' . ')' . '+237'),
            new self(38, '(' . 'Canada' . ')' . '+1'),
            new self(39, '(' . 'Cape Verde' . ')' . '+238'),
            new self(40, '(' . 'Cayman Islands' . ')' . '+1-345'),
            new self(41, '(' . 'Central African Republic' . ')' . '+236'),
            new self(42, '(' . 'Chad' . ')' . '+235'),
            new self(43, '(' . 'Chile' . ')' . '+56'),
            new self(44, '(' . 'China' . ')' . '+86'),
            new self(45, '(' . 'Christmas Island' . ')' . '+61'),
            new self(46, '(' . 'Cocos Islands' . ')' . '+61'),
            new self(47, '(' . 'Colombia' . ')' . '+57'),
            new self(48, '(' . 'Comoros' . ')' . '+269'),
            new self(49, '(' . 'Cook Islands' . ')' . '+682'),
            new self(50, '(' . 'Costa Rica' . ')' . '+506'),
            new self(51, '(' . 'Croatia' . ')' . '+385'),
            new self(52, '(' . 'Cuba' . ')' . '+53'),
            new self(53, '(' . 'Curacao' . ')' . '+357'),
            new self(54, '(' . 'Cyprus' . ')' . '+599'),
            new self(55, '(' . 'Czech Republic' . ')' . '+420'),
            new self(56, '(' . 'Democratic Republic of the Congo' . ')' . '+243'),
            new self(57, '(' . 'Denmark' . ')' . '+269'),
            new self(58, '(' . 'Denmark' . ')' . '+45'),
            new self(59, '(' . 'Djibouti' . ')' . '+253'),
            new self(60, '(' . 'Dominica' . ')' . '+1-767'),
            new self(61, '(' . 'Dominican Republic' . ')' . '+1-809'),
            new self(62, '(' . 'Dominican Republic' . ')' . '+1-829'),
            new self(63, '(' . 'Dominican Republic' . ')' . '+1-849'),
            new self(64, '(' . 'East Timor' . ')' . '+670'),
            new self(65, '(' . 'Ecuador' . ')' . '+593'),
            new self(66, '(' . 'Egypt' . ')' . '+20'),
            new self(67, '(' . 'El Salvador' . ')' . '+503'),
            new self(68, '(' . 'Equatorial Guinea' . ')' . '+269'),
            new self(69, '(' . 'Equatorial Guinea' . ')' . '+240'),
            new self(70, '(' . 'Eritrea' . ')' . '+291'),
            new self(71, '(' . 'Estonia' . ')' . '+372'),
        ];
    }

}
