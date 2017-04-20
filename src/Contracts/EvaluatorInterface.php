<?php namespace Periloso\Evaluator\Contracts;

use \Closure;

interface EvaluatorInterface
{
    /**
     * Get the Expression Engine instance
     *
     * @return \Symfony\Component\ExpressionLanguage\ExpressionLanguage
     */
    public function getExpressionEngine();

    /**
     * Get evaluator current adapter instance
     *
     * @return \Periloso\Evaluator\Contracts\AdapterInterface
     */
    public function expression();

    /**
     * Evaluate an expression using custom rule
     *
     * @param  string $expression
     * @param  mixed $item
     * @param  \Closure $callback
     * @return mixed|\Closure
     */
    public function evaluate($expression, $item, Closure $callback = null);

    /**
     * Evaluate an expression using stored rule
     *
     * @param  string $expressionKey
     * @param  mixed $item
     * @param  \Closure $callback
     * @return mixed|\Closure
     */
    public function evaluateRule($expressionKey, $item, Closure $callback = null);

    /**
     * Apply the condition rules to an item
     *
     * @param  string $expressionKey
     * @param  mixed $item
     * @param  \Closure $callback
     * @return \Periloso\Evaluator\Collection | \Closure
     */
    public function condition($expressionKey, $item, Closure $callback = null);
}
