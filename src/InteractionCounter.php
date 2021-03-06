<?php

namespace Spatie\SchemaOrg;

/**
 * A summary of how users have interacted with this CreativeWork. In most cases,
 * authors will use a subtype to specify the specific type of interaction.
 *
 * @see http://schema.org/InteractionCounter
 */
class InteractionCounter extends StructuredValue
{
    /**
     * The Action representing the type of interaction. For up votes, +1s, etc.
     * use [[LikeAction]]. For down votes use [[DislikeAction]]. Otherwise, use
     * the most specific Action.
     *
     * @param \Spatie\SchemaOrg\Action $interactionType
     *
     * @return static
     *
     * @see http://schema.org/interactionType
     */
    public function interactionType($interactionType)
    {
        return $this->setProperty('interactionType', $interactionType);
    }

}
