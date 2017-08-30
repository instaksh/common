<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\Tests\Common\Proxy;

use Doctrine;
use stdClass as A;

/**
 * Test asset representing a lazy loadable object
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @since  2.4
 */
class LazyLoadableObjectWithTypehints
{

    /** @var string */
    private $identifierFieldNoReturnTypehint;

    /** @var string */
    private $identifierFieldReturnTypehintScalar;

    /** @var LazyLoadableObjectWithTypehints */
    private $identifierFieldReturnClassFullyQualified;

    /** @var LazyLoadableObjectWithTypehints */
    private $identifierFieldReturnClassPartialUse;

    /** @var LazyLoadableObjectWithTypehints */
    private $identifierFieldReturnClassFullUse;

    /** @var \stdClass */
    private $identifierFieldReturnClassOneWord;

    /** @var \stdClass */
    private $identifierFieldReturnClassOneLetter;

    /**
     * @return string
     */
    public function getIdentifierFieldNoReturnTypehint()
    {
        return $this->identifierFieldNoReturnTypehint;
    }

    public function getIdentifierFieldReturnTypehintScalar() : string
    {
        return $this->identifierFieldReturnTypehintScalar;
    }

    public function getIdentifierFieldReturnClassFullyQualified() : \Doctrine\Tests\Common\Proxy\LazyLoadableObjectWithTypehints
    {
        return $this->identifierFieldReturnClassFullyQualified;
    }

    public function getIdentifierFieldReturnClassPartialUse() : Doctrine\Tests\Common\Proxy\LazyLoadableObjectWithTypehints
    {
        return $this->identifierFieldReturnClassPartialUse;
    }

    public function getIdentifierFieldReturnClassFullUse() : LazyLoadableObjectWithTypehints
    {
        return $this->identifierFieldReturnClassFullUse;
    }

    public function getIdentifierFieldReturnClassOneWord() : \stdClass
    {
        return $this->identifierFieldReturnClassOneWord;
    }

    public function getIdentifierFieldReturnClassOneLetter() : A
    {
        return $this->identifierFieldReturnClassOneLetter;
    }
}
