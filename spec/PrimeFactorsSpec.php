<?php

namespace spec;

use PhpSpec\ObjectBehavior;

use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PrimeFactors');
    }

    function it_returns_an_empty_array_for_1(){
        $this->generate(1)->shouldReturn([]);
    }

    function it_returns_prime_factor_for_2(){
        $this->generate(2)->shouldReturn([2]);
    }

    function it_returns_prime_factor_for_3(){
        $this->generate(3)->shouldReturn([3]);
    }

    function it_returns_prime_factor_for_4(){
        $this->generate(4)->shouldReturn([2,2]);
    }

    function it_returns_prime_factor_for_100(){
        $this->generate(100)->shouldReturn([2,2,5,5]);
    }
}
