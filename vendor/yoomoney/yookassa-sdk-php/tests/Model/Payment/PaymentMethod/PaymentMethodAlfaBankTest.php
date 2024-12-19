<?php

/*
* The MIT License
*
* Copyright (c) 2024 "YooMoney", NBСO LLC
*
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
*
* The above copyright notice and this permission notice shall be included in
* all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
* THE SOFTWARE.
*/

namespace Tests\YooKassa\Model\Payment\PaymentMethod;

use Exception;
use Tests\YooKassa\AbstractTestCase;
use Datetime;
use YooKassa\Model\Metadata;
use YooKassa\Model\Payment\PaymentMethod\PaymentMethodAlfaBank;

/**
 * PaymentMethodAlfaBankTest
 *
 * @category    ClassTest
 * @author      cms@yoomoney.ru
 * @link        https://yookassa.ru/developers/api
 */
class PaymentMethodAlfaBankTest extends AbstractTestCase
{
    protected PaymentMethodAlfaBank $object;

    /**
     * @return PaymentMethodAlfaBank
     */
    protected function getTestInstance(): PaymentMethodAlfaBank
    {
        return new PaymentMethodAlfaBank();
    }

    /**
     * @return void
     */
    public function testPaymentMethodAlfaBankClassExists(): void
    {
        $this->object = $this->getMockBuilder(PaymentMethodAlfaBank::class)->getMockForAbstractClass();
        $this->assertTrue(class_exists(PaymentMethodAlfaBank::class));
        $this->assertInstanceOf(PaymentMethodAlfaBank::class, $this->object);
    }

    /**
     * Test property "type"
     *
     * @return void
     * @throws Exception
     */
    public function testType(): void
    {
        $instance = $this->getTestInstance();
        self::assertNotNull($instance->getType());
        self::assertNotNull($instance->type);
        self::assertContains($instance->getType(), ['alfabank']);
        self::assertContains($instance->type, ['alfabank']);
    }

    /**
     * Test invalid property "type"
     * @dataProvider invalidTypeDataProvider
     * @param mixed $value
     * @param string $exceptionClass
     *
     * @return void
     */
    public function testInvalidType(mixed $value, string $exceptionClass): void
    {
        $instance = $this->getTestInstance();

        $this->expectException($exceptionClass);
        $instance->setType($value);
    }


    /**
     * @return array[]
     * @throws Exception
     */
    public function invalidTypeDataProvider(): array
    {
        $instance = $this->getTestInstance();
        return $this->getInvalidDataProviderByType($instance->getValidator()->getRulesByPropName('_type'));
    }

    /**
     * Test property "login"
     * @dataProvider validLoginDataProvider
     * @param mixed $value
     *
     * @return void
     * @throws Exception
     */
    public function testLogin(mixed $value): void
    {
        $instance = $this->getTestInstance();
        self::assertEmpty($instance->getLogin());
        self::assertEmpty($instance->login);
        $instance->setLogin($value);
        self::assertEquals($value, is_array($value) ? $instance->getLogin()->toArray() : $instance->getLogin());
        self::assertEquals($value, is_array($value) ? $instance->login->toArray() : $instance->login);
        if (!empty($value)) {
            self::assertNotNull($instance->getLogin());
            self::assertNotNull($instance->login);
        }
    }

    /**
     * Test invalid property "login"
     * @dataProvider invalidLoginDataProvider
     * @param mixed $value
     * @param string $exceptionClass
     *
     * @return void
     */
    public function testInvalidLogin(mixed $value, string $exceptionClass): void
    {
        $instance = $this->getTestInstance();

        $this->expectException($exceptionClass);
        $instance->setLogin($value);
    }

    /**
     * @return array[]
     * @throws Exception
     */
    public function validLoginDataProvider(): array
    {
        $instance = $this->getTestInstance();
        return $this->getValidDataProviderByType($instance->getValidator()->getRulesByPropName('_login'));
    }

    /**
     * @return array[]
     * @throws Exception
     */
    public function invalidLoginDataProvider(): array
    {
        $instance = $this->getTestInstance();
        return $this->getInvalidDataProviderByType($instance->getValidator()->getRulesByPropName('_login'));
    }
}
