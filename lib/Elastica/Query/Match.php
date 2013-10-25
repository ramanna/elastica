<?php

namespace Elastica\Query;

/**
 * Match query
 *
 * @category Xodoa
 * @package Elastica
 * @author F21
 * @link http://www.elasticsearch.org/guide/reference/query-dsl/match-query.html
 */
class Match extends AbstractQuery
{
    /**
     * Sets a param for the message array
     *
     * @param  string                    $field
     * @param  mixed                     $values
     * @return \Elastica\Query\Match
     */
    public function setField($field, $values)
    {
        return $this->setParam($field, $values);
    }

    /**
     * Sets a param for the given field
     *
     * @param  string                    $field
     * @param  string                    $key
     * @param  string                    $value
     * @return \Elastica\Query\Match
     */
    public function setFieldParam($field, $key, $value)
    {
        if (!isset($this->_params[$field])) {
            $this->_params[$field] = array();
        }

        $this->_params[$field][$key] = $value;

        return $this;
    }

    /**
     * Sets the query string
     *
     * @param  string                    $field
     * @param  string                    $query
     * @return \Elastica\Query\Match
     */
    public function setFieldQuery($field, $query)
    {
        return $this->setFieldParam($field, 'query', $query);
    }

    /**
     * Set field type
     *
     * @param  string                    $field
     * @param  string                    $type
     * @return \Elastica\Query\Match
     */
    public function setFieldType($field, $type)
    {
        return $this->setFieldParam($field, 'type', $type);
    }

    /**
     * Set field operator
     *
     * @param  string                    $field
     * @param  string                    $operator
     * @return \Elastica\Query\Match
     */
    public function setFieldOperator($field, $operator)
    {
        return $this->setFieldParam($field, 'operator', $operator);
    }

    /**
     * Set field analyzer
     *
     * @param  string                    $field
     * @param  string                    $analyzer
     * @return \Elastica\Query\Match
     */
    public function setFieldAnalyzer($field, $analyzer)
    {
        return $this->setFieldParam($field, 'analyzer', $analyzer);
    }

    /**
     * Set field boost value
     *
     * If not set, defaults to 1.0.
     *
     * @param  string                    $field
     * @param  float                     $boost
     * @return \Elastica\Query\Match
     */
    public function setFieldBoost($field, $boost = 1.0)
    {
        return $this->setFieldParam($field, 'boost', (float) $boost);
    }

    /**
     * Set field minimum should match
     *
     * @param  string                    $field
     * @param  int                       $minimumShouldMatch
     * @return \Elastica\Query\Match
     */
    public function setFieldMinimumShouldMatch($field, $minimumShouldMatch)
    {
        return $this->setFieldParam($field, 'minimum_should_match', (int) $minimumShouldMatch);
    }

    /**
     * Set field fuzziness
     *
     * @param  string                    $field
     * @param  float                     $fuzziness
     * @return \Elastica\Query\Match
     */
    public function setFieldFuzziness($field, $fuzziness)
    {
        return $this->setFieldParam($field, 'fuzziness', (float) $fuzziness);
    }

    /**
     * Set field fuzzy rewrite
     *
     * @param  string                    $field
     * @param  string                    $fuzzyRewrite
     * @return \Elastica\Query\Match
     */
    public function setFieldFuzzyRewrite($field, $fuzzyRewrite)
    {
        return $this->setFieldParam($field, 'fuzzy_rewrite', $fuzzyRewrite);
    }

    /**
     * Set field prefix length
     *
     * @param  string                    $field
     * @param  int                       $prefixLength
     * @return \Elastica\Query\Match
     */
    public function setFieldPrefixLength($field, $prefixLength)
    {
        return $this->setFieldParam($field, 'prefix_length', (int) $prefixLength);
    }

    /**
     * Set field max expansions
     *
     * @param  string                    $field
     * @param  int                       $maxExpansions
     * @return \Elastica\Query\Match
     */
    public function setFieldMaxExpansions($field, $maxExpansions)
    {
        return $this->setFieldParam($field, 'max_expansions', (int) $maxExpansions);
    }
}
